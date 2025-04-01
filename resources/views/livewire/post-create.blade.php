<div>
    <form
        wire:submit.prevent='create'
        action="#"
    >
        @csrf
        <!-- Campo Título -->
        <div class="form-group mb-3">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <label for="title" class="form-label">Título</label>
            <input
                wire:model="title"
                type="text"
                name="title"
                id="title"
                class="form-control"
                placeholder="Informe o título do post"
            >

            @error('title')
            <span class="text-danger text"> {{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Content -->
        <div class="form-group mb-3">
            <label for="content" class="form-label">Conteúdo</label>
            <textarea
                wire:model="content"
                name="content"
                id="content"
                class="form-control"
                rows="5"
                placeholder="Digite o conteúdo do post"
            >
</textarea>
            @error('content')
            <span class="text-danger text"> {{ $message }}</span>
            @enderror

        </div>

        <!-- Botão Submit -->
        <div class="d-flex align-items-center">
            <div wire:loading wire:target="create">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="230"
                     height="230" style="shape-rendering: auto; display: block; background: rgb(255, 255, 255);"
                >
                    <g>
                        <g transform="rotate(0 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.099s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(3.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.098s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(7.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.097s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(10.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.096s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(14.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.095s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(18 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.094s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(21.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.093s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(25.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.092s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(28.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.091s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(32.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.09s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(36 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.089s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(39.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.088s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(43.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.087s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(46.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.086s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(50.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.085s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(54 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.084s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(57.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.083s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(61.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.082s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(64.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.081s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(68.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.08s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(72 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.079s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(75.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.078s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(79.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.077s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(82.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.076s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(86.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.075s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(90 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.074s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(93.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.073s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(97.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.072s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(100.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.071s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(104.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.07s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(108 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.069s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(111.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.068s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(115.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.067s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(118.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.066s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(122.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.065s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(126 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.064s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(129.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.063s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(133.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.062s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(136.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.061s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(140.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.06s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(144 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.059s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(147.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.058s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(151.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.057s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(154.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.056s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(158.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.055s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(162 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.054s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(165.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.053s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(169.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.052s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(172.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.051s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(176.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.05s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(180 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.049s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(183.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.048s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(187.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.047s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(190.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.046s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(194.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.045s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(198 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.044s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(201.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.043s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(205.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.042s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(208.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.041s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(212.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.04s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(216 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.039s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(219.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.038s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(223.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.037s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(226.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.036s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(230.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.035s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(234 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.034s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(237.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.033s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(241.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.032s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(244.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.031s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(248.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.03s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(252 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.029s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(255.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.028s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(259.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.027s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(262.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.026s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(266.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.025s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(270 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.024s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(273.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.023s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(277.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.022s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(280.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.021s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(284.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.02s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(288 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.019s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(291.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.018s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(295.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.017s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(298.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.016s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(302.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.015s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(306 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.014s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(309.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.013s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(313.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.012s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(316.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.011s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(320.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.01s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(324 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.009s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(327.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.008s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(331.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.007s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(334.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.006s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(338.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.005s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(342 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.004s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(345.6 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.003s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(349.2 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.002s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(352.8 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="-0.001s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g transform="rotate(356.4 50 50)">
                            <rect fill="#000000" height="1" width="10" ry="0.5" rx="15" y="17.5" x="35">
                                <animate repeatCount="indefinite" begin="0s" dur="0.1s" keyTimes="0;1" values="1;0"
                                         attributeName="opacity"></animate>
                            </rect>
                        </g>
                        <g></g>
                    </g><!-- [ldio] generated by https://loading.io --></svg>
            </div>
            <button
                type="submit"
                class="btn btn-primary">
                Salvar Post
            </button>
        </div>
    </form>
</div>
