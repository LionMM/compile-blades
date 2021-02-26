<?php

if (!function_exists('compiled_view')) {
    /**
     * Wrapper for original view helper for using compiled and flatted blade templates
     *
     * @param string|string[]|null $view
     * @param \Illuminate\Contracts\Support\Arrayable|array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    function compiled_view($view = null, $data = [], $mergeData = [])
    {
        $fallbackView = null;
        if (is_array($view)) {
            [$compiledView, $fallbackView] = $view;
        } else {
            $compiledView = $view;
            if (config('compileblades.default_folder') & strpos($view, config('compileblades.default_folder')) === 0) {
                $fallbackView = substr($view, strlen(config('compileblades.default_folder') + 1));
            }
        }
        if (view()->exists($compiledView)) {
            return view($compiledView, $data, $mergeData);
        }

        if ($fallbackView) {
            return view($fallbackView, $data, $mergeData);
        }

        throw new InvalidArgumentException("Compiled and original views not found for: {$compiledView}.");
    }
}