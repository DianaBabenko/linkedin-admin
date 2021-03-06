<?php

namespace Laravel\Nova\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\DeleteField;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class FieldDestroyController extends Controller
{
    /**
     * Delete the file at the given field.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function handle(NovaRequest $request)
    {
        $resource = $request->findResourceOrFail();

        $resource->authorizeToUpdate($request);

        $field = $resource->updateFields($request)
                    ->whereInstanceOf(File::class)
                    ->findFieldByAttribute($request->field, function () {
                        abort(404);
                    });

        DeleteField::forRequest(
            $request,
            $field,
            $resource->resource
        )->save();

        Nova::actionEvent()->forResourceUpdate(
            $request->user(),
            $resource->resource
        )->save();
    }
}
