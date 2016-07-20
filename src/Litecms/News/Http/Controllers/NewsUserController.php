<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\News\Http\Requests\NewsUserRequest;
use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litecms\News\Models\News;

class NewsUserController extends BaseController
{
    
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'web';

     /**
     * Initialize news controller.
     *
     * @param type NewsRepositoryInterface $news
     *
     * @return type
     */
    protected $home = 'home';

    public function __construct(NewsRepositoryInterface $news)
    {
        $this->middleware('web');
        $this->middleware('auth:web');
        $this->middleware('auth.active:web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
         $this->repository = $news;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(NewsUserRequest $request)
    {
        $this->repository->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsUserCriteria());
        $news = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC');
        })->all();

        $this->theme->prependTitle(trans('news::news.names') . ' :: ');

        return $this->theme->of('news::user.news.index', compact('news'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param News $news
     *
     * @return Response
     */
    public function show(NewsUserRequest $request, News $news)
    {

        Form::populate($news);

        return $this->theme->of('news::user.news.show', compact('news'))->render();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(NewsUserRequest $request)
    {

        $news = $this->repository->newInstance([]);
        Form::populate($news);

        return $this->theme->of('news::user.news.create', compact('news'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(NewsUserRequest $request)
    {
        try {
            $attributes = $request->all();

            $attributes['published_on'] = date('Y-m-d');

            $attributes['user_id'] = user_id();
            $news                  = $this->repository->create($attributes);

            return redirect(trans_url('/user/news/news'))
                ->with('message', trans('messages.success.created', ['Module' => trans('news::news.name')]))
                ->with('code', 201);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param News $news
     *
     * @return Response
     */
    public function edit(NewsUserRequest $request, News $news)
    {

        Form::populate($news);

        return $this->theme->of('news::user.news.edit', compact('news'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param News $news
     *
     * @return Response
     */
    public function update(NewsUserRequest $request, News $news)
    {
        try {

            $attributes = $request->all();
            $attributes['published'] = 'No';
            $this->repository->update($attributes, $news->getRouteKey());

            return redirect(trans_url('/user/news/news'))
                ->with('message', trans('messages.success.updated', ['Module' => trans('news::news.name')]))
                ->with('code', 204);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(NewsUserRequest $request, News $news)
    {
        try {
            $this->repository->delete($news->getRouteKey());

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('news::news.name')]),
                'code'     => 202,
                'redirect' => trans_url('/user/news/news'),
            ], 202);
        } catch (Exception $e) {

            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);

        }
    }

}
