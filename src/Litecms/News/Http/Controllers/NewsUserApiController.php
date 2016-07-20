<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\News\Http\Requests\NewsUserApiRequest;
use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litecms\News\Models\News;

/**
 * User API controller class.
 */
class NewsUserApiController extends BaseController
{
   


    /**
     * Initialize news controller.
     *
     * @param type NewsRepositoryInterface $news
     *
     * @return type
     */
    protected $guard = 'api';

    public function __construct(NewsRepositoryInterface $news)
    {
        $this->middleware('api');
        $this->middleware('jwt.auth:api');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
         $this->repository = $news;
        parent::__construct();
    }

    /**
     * Display a list of news.
     *
     * @return json
     */
    public function index(NewsUserApiRequest $request)
    {
        $news = $this->repository
            ->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsUserCriteria())
            ->setPresenter('\\Litecms\\News\\Repositories\\Presenter\\NewsListPresenter')
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->all();
        $news['code'] = 2000;
        return response()->json($news)
            ->setStatusCode(200, 'INDEX_SUCCESS');

    }

    /**
     * Display news.
     *
     * @param Request $request
     * @param Model   News
     *
     * @return Json
     */
    public function show(NewsUserApiRequest $request, News $news)
    {

        if ($news->exists) {
            $news         = $news->presenter();
            $news['code'] = 2001;
            return response()->json($news)
                ->setStatusCode(200, 'SHOW_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Show the form for creating a new news.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(NewsUserApiRequest $request, News $news)
    {
        $news         = $news->presenter();
        $news['code'] = 2002;
        return response()->json($news)
            ->setStatusCode(200, 'CREATE_SUCCESS');
    }

    /**
     * Create new news.
     *
     * @param Request $request
     *
     * @return json
     */
    public function store(NewsUserApiRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.api');
            $news                  = $this->repository->create($attributes);
            $news                  = $news->presenter();
            $news['code']          = 2004;

            return response()->json($news)
                ->setStatusCode(201, 'STORE_SUCCESS');
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4004,
            ])->setStatusCode(400, 'STORE_ERROR');
        }

    }

    /**
     * Show news for editing.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return json
     */
    public function edit(NewsUserApiRequest $request, News $news)
    {

        if ($news->exists) {
            $news         = $news->presenter();
            $news['code'] = 2003;
            return response()->json($news)
                ->setStatusCode(200, 'EDIT_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Update the news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return json
     */
    public function update(NewsUserApiRequest $request, News $news)
    {
        try {

            $attributes = $request->all();

            $news->update($attributes);
            $news         = $news->presenter();
            $news['code'] = 2005;

            return response()->json($news)
                ->setStatusCode(201, 'UPDATE_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4005,
            ])->setStatusCode(400, 'UPDATE_ERROR');

        }

    }

    /**
     * Remove the news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return json
     */
    public function destroy(NewsUserApiRequest $request, News $news)
    {

        try {

            $t = $news->delete();

            return response()->json([
                'message' => trans('messages.success.delete', ['Module' => trans('news::news.name')]),
                'code'    => 2006,
            ])->setStatusCode(202, 'DESTROY_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4006,
            ])->setStatusCode(400, 'DESTROY_ERROR');
        }

    }

}
