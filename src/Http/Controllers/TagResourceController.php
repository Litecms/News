<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\News\Http\Requests\TagRequest;
use Litecms\News\Interfaces\TagRepositoryInterface;
use Litecms\News\Models\Tag;

/**
 * Resource controller class for tag.
 */
class TagResourceController extends BaseController
{

    /**
     * Initialize tag resource controller.
     *
     * @param type TagRepositoryInterface $tag
     *
     * @return null
     */
    public function __construct(TagRepositoryInterface $tag)
    {
        parent::__construct();
        $this->repository = $tag;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\News\Repositories\Criteria\TagResourceCriteria::class);
    }

    /**
     * Display a list of tag.
     *
     * @return Response
     */
    public function index(TagRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\News\Repositories\Presenter\TagPresenter::class)
                ->$function();
        }

        $tags = $this->repository->paginate();

        return $this->response->title(trans('news::tag.names'))
            ->view('news::tag.index', true)
            ->data(compact('tags'))
            ->output();
    }

    /**
     * Display tag.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function show(TagRequest $request, Tag $tag)
    {

        if ($tag->exists) {
            $view = 'news::tag.show';
        } else {
            $view = 'news::tag.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('news::tag.name'))
            ->data(compact('tag'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new tag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TagRequest $request)
    {

        $tag = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('news::tag.name')) 
            ->view('news::tag.create', true) 
            ->data(compact('tag'))
            ->output();
    }

    /**
     * Create new tag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TagRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $tag                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('news::tag.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('news/tag/' . $tag->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/news/tag'))
                ->redirect();
        }

    }

    /**
     * Show tag for editing.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function edit(TagRequest $request, Tag $tag)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('news::tag.name'))
            ->view('news::tag.edit', true)
            ->data(compact('tag'))
            ->output();
    }

    /**
     * Update the tag.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function update(TagRequest $request, Tag $tag)
    {
        try {
            $attributes = $request->all();

            $tag->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('news::tag.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('news/tag/' . $tag->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('news/tag/' . $tag->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the tag.
     *
     * @param Model   $tag
     *
     * @return Response
     */
    public function destroy(TagRequest $request, Tag $tag)
    {
        try {

            $tag->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('news::tag.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('news/tag/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('news/tag/' . $tag->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple tag.
     *
     * @param Model   $tag
     *
     * @return Response
     */
    public function delete(TagRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('news::tag.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('news/tag'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/news/tag'))
                ->redirect();
        }

    }

    /**
     * Restore deleted tags.
     *
     * @param Model   $tag
     *
     * @return Response
     */
    public function restore(TagRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('news::tag.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/news/tag'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/news/tag/'))
                ->redirect();
        }

    }

}
