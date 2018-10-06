<?php

namespace Litecms\News\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class NewsPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new NewsTransformer();
    }
}