<div class="alert alert-danger" role="alert">
    <ul>
        @for ($i = 0; $i < sizeof($arrayErrors); $i++)
            <li>{{ $arrayErrors[$i] }}</li>
        @endfor
    </ul>
</div>
