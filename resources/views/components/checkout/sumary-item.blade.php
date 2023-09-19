<div 
    @class([
        "flex items-ceter justify-between",
        "border-t border-white border-opacity-10 pt-6 text-white" => $isLast ?? false,
    ])
>
    <dt class="text-primary-200"> {{ $title }} </dt>
    <dd class="text-secondary-300">R$ {{ $value }}</dd>
</div>