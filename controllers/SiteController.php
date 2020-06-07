<?php

namespace controllers;

use system\Controller;
use system\Response;
use helpers\JsLoaderClass;

class SiteController extends Controller
{

    /**
     * @return string
     * @throws \Exception
     */
    public function actionIndex()
    {
        return $this->render('products',
        [
            'jsLoaderClass' => JsLoaderClass::buildLoadCasesScript()
        ]);
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function actionItem(int $item = 1)
    {
        return $this->render('product',
            [
                'jsLoaderClass' => JsLoaderClass::buildLoadCasesScript()
            ]);
    }
}
