<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AutoMark\AutoMarkCollection;
use App\Interfaces\AutoMark\AutoMarkServiceInterface;

/**
 * Class AutoMarkController
 * @package Http\Controllers\api\v1
 */
class AutoMarkController extends Controller
{
    /**
     * @var AutoMarkServiceInterface $autoMarkService
     */
    private AutoMarkServiceInterface $autoMarkService;

    /**
     * @param AutoMarkServiceInterface $autoMarkService
     */
    public function __construct(AutoMarkServiceInterface $autoMarkService)
    {
        $this->autoMarkService = $autoMarkService;
    }

    /**
     * @return AutoMarkCollection
     */
    public function list(): AutoMarkCollection
    {
        $marks = $this->autoMarkService->list();

        return new AutoMarkCollection($marks);
    }
}
