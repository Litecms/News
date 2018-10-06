<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\News\Http\Requests\NewsRequest;
use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litecms\News\Models\News;

/**
 * Resource controller class for news.
 */
class NewsResourceController extends BaseController
{

    /**
     * Initialize news resource controller.
     *
     * @param type NewsRepositoryInterface $news
     *
     * @return null
     */
    public function __construct(NewsRepositoryInterface $news)
    {
        parent::__construct();
        $this->repository = $news;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\News\Repositories\Criteria\NewsResourceCriteria::class);
    }

    /**
     * Display a list of news.
     *
     * @return Response
     */
    public function index(NewsRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\News\Repositories\Presenter\NewsPresenter::class)
                ->$function();
        }

        $news = $this->repository->paginate();

        return $this->response->title(trans('news::news.names'))
            ->view('news::news.index', true)
            ->data(compact('news'))
            ->output();
    }

    /**
     * Display news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return Response
     */
    public function show(NewsRequest $request, News $news)
    {

        if ($news->exists) {
            $view = 'news::news.show';
        } else {
            $view = 'news::news.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('news::news.name'))
            ->data(compact('news'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new news.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(NewsRequest $request)
    {

        $news = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('news::news.name')) 
            ->view('news::news.create', true) 
            ->data(compact('news'))
            ->output();
    }

    /**
     * Create new news.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $news                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('news::news.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('news/news/' . $news->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/news/news'))
                ->redirect();
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
    public function edit(NewsRequest $request, News $news)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('news::news.name'))
            ->view('news::news.edit', true)
            ->data(compact('news'))
            ->output();
    }

    /**
     * Update the news.
     *
     * @param Request $request
     * @param Model   $news
     *
     * @return Response
     */
    public function update(NewsRequest $request, News $news)
    {
        try {
            $attributes = $request->all();

            $news->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('news::news.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('news/news/' . $news->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('news/news/' . $news->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the news.
     *
     * @param Model   $news
     *
     * @return Response
     */
    public function destroy(NewsRequest $request, News $news)
    {
        try {

            $news->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('news::news.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('news/news/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('news/news/' . $news->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple news.
     *
     * @param Model   $news
     *
     * @return Response
     */
    public function delete(NewsRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('news::news.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('news/news'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/news/news'))
                ->redirect();
        }

    }

    /**
     * Restore deleted news.
     *
     * @param Model   $news
     *
     * @return Response
     */
    public function restore(NewsRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('news::news.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/news/news'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/news/news/'))
                ->redirect();
        }

    }

}
