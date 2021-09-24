<?php

namespace LorenzoSapora\NovaActionButton;

use Laravel\Nova\Fields\Field;

class NovaActionButton extends Field
{
    public $component = 'nova-action-button';

    public function action($action, $resourceId): NovaActionButton
    {
        $actionInst = \is_string($action) ? new $action() : $action;

        if ($actionInst) {
            $actionInst->withMeta([
                'resourceId' => $resourceId
            ]);
        }

        return $this->withMeta([
            'action' => $actionInst,
            'resourceId' => $resourceId,
        ]);
    }

    public function text(string $text)
    {
        return $this->withMeta(compact('text'));
    }

    public function hide($callback)
    {
        return $this->withMeta(['hidden' => call_user_func($callback)]);
    }

    public function showLoadingAnimation($callback = true)
    {
        return $this->withMeta(
            [
                'showLoadingAnimation' => is_callable($callback) ? $callback() : $callback
            ]
        );
    }

    public function loadingColor(string $loadingColor)
    {
        return $this->withMeta(compact('loadingColor'));
    }
}
