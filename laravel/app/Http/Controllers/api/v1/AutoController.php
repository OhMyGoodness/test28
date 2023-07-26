<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\DTO\Auto\AutoCreateDto;
use App\Http\Requests\Auto\AutoRequest;
use App\Http\Resources\Auto\AutoCollection;
use App\Http\Resources\Auto\AutoResource;
use App\Interfaces\Auto\AutoServiceInterface;
use App\Models\Auto;
use Illuminate\Http\JsonResponse;

/**
 * Class AutoController
 * @package Http\Controllers\api\v1
 */
class AutoController extends Controller
{
    /**
     * @var AutoServiceInterface
     */
    private AutoServiceInterface $autoService;

    /**
     * AutoMarkController constructor.
     * @param AutoServiceInterface $autoService
     */
    public function __construct(AutoServiceInterface $autoService)
    {
        $this->autoService = $autoService;
    }


    /**
     * @return AutoCollection
     */
    public function list(): AutoCollection
    {
        $user_id = Auth()->id();

        $autos = $user_id ? $this->autoService->listByUserId($user_id) : $this->autoService->list();

        return new AutoCollection($autos);
    }

    /**
     * Create resource in storage.
     * @param AutoRequest $request
     * @return AutoResource
     */
    public function store(AutoRequest $request): AutoResource
    {
        /* если авто есть в базе, мы выбираем его и выдаем в response
           это простейшая логика создания записи в базе, без дополнительных проверок и тд
        */
        $data = AutoCreateDto::transform($request->validated());
        $auto = $this->autoService->create($data);

        return new AutoResource($auto);
    }

    /**
     * Update specific resource in storage.
     * @param AutoRequest $request
     * @param Auto $auto
     * @return AutoResource
     */
    public function update(AutoRequest $request, Auto $auto): AutoResource
    {
        $data = AutoCreateDto::transform($request->validated());
        $auto = $this->autoService->update($auto->id, $data);

        return new AutoResource($auto);
    }

    /**
     * @param Auto $auto
     * @return JsonResponse
     */
    public function destroy(Auto $auto): JsonResponse
    {
        $result = $this->autoService->delete($auto->id);

        return response()->json(['is_success' => $result]);
    }
}
