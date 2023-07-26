<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AutoModel\AutoModelCollection;
use App\Interfaces\AutoModel\AutoModelServiceInterface;

/**
 * AutoModelController
 * @package Http\Controllers\api\v1
 */
class AutoModelController extends Controller
{
    /**
     * @var AutoModelServiceInterface $autoModelService
     */
    private AutoModelServiceInterface $autoModelService;

    /**
     * AutoMarkController constructor.
     * @param AutoModelServiceInterface $autoModelService
     */
    public function __construct(AutoModelServiceInterface $autoModelService)
    {
        $this->autoModelService = $autoModelService;
    }

    /**
     * @return AutoModelCollection
     */
    public function list(): AutoModelCollection
    {
        $marks = $this->autoModelService->list();

        return new AutoModelCollection($marks);
    }
}
