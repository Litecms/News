<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\News\Http\Requests\NewsAdminRequest;
use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litecms\News\Models\News;

/**
 * Admin web controller class.
 */
class NewsAdminController extends BaseController
{
    
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    public $guard = 'admin.web';

    /**
     * Initialize news controller.
     *
     * @param type NewsRepositoryInterface $news
     *
     * @return type
     */
    public $home = 'admin';

    public function __construct(NewsRepositoryInterface $news)
    {
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        $this->repository = $news;
        parent::__construct();
    }

    /**
     * Display a list of news.
     *
     * @return Response
     */
    public function index(NewsAdminRequest $request)
    {
        $pageLimit = $request->input('pageLimit');

        if ($request->wantsJson()) {
            $news = $this->repository->setPresenter('\\Litecms\\News\\Repositories\\Presenter\\NewsListPresenter')
                ->scopeQuery(function ($query) {
                    return $query->orderBy('id', 'DESC');
                })->paginate($pageLimit);
            $news['recordsTotal']    = $news['meta']['pagination']['total'];
            $news['recordsFiltered'] = $news['meta']['pagination']['total'];
            $news['request']         = $request->all();

            return response()->json($news, 200);

        }

        $this->theme->prependTitle(trans('news::news.names') . ' :: ');
        return $this->theme->of('news::admin.news.index')->render();
    }

    /**
     * Display news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return Response
     */
    public function show(NewsAdminRequest $request, News $news)
    {

        if (!$news->exists) {
            return response()->view('news::admin.news.new', compact('news'));
        }

        Form::populate($news);
        return response()->view('news::admin.news.show', compact('news'));
    }

    /**
     * Show the form for creating a new news.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(NewsAdminRequest $request)
    {

        $news = $this->repository->newInstance([]);

        Form::populate($news);

        return response()->view('news::admin.news.create', compact('news'));

    }

    /**
     * Create new news.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(NewsAdminRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['published_on'] = date('Y-m-d');
            $attributes['user_id'] = user_id('admin.web');
            $news                  = $this->repository->create($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('news::news.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/news/news/' . $news->getRouteKey()),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 400,
            ], 400);
        }

    }

    /**
     * Show news for editing.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return Response
     */
    public function edit(NewsAdminRequest $request, News $news)
    {
        Form::populate($news);
        return response()->view('news::admin.news.edit', compact('news'));
    }

    /**
     * Update the news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return Response
     */
    public function update(NewsAdminRequest $request, News $news)
    {
        try {

            $attributes = $request->all();

            $news->update($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('news::news.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/news/news/' . $news->getRouteKey()),
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/news/news/' . $news->getRouteKey()),
            ], 400);

        }

    }

    /**
     * Remove the news.
     *
     * @param Model   $news
     *
     * @return Response
     */
    public function destroy(NewsAdminRequest $request, News $news)
    {

        try {

            $t = $news->delete();

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('news::news.name')]),
                'code'     => 202,
                'redirect' => trans_url('/admin/news/news/0'),
            ], 202);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/news/news/' . $news->getRouteKey()),
            ], 400);
        }

    }

}
