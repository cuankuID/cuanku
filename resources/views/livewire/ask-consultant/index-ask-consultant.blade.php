@section('style')
<style>
    /* hide attach file trix */
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>
@endsection

<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Tanya Konsultan'])

            <h2 class="section-title">Tanya Konsultan</h2>
            <p class="section-lead">
                Disini anda bisa bertanya mengenai masalah finansial anda dan akan dijawab langsung oleh para konsultan ahli
            </p>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4>Tanyakan Konsultan</h4>
                            </div>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse">
                            <form wire:submit.prevent="sendQuestion">
                                <div class="card-body">
                                    <div wire:ignore>
                                        <div class="form-group">
                                            <input id="question" type="hidden">
                                            <trix-editor wire:model.defer="question" input="question"></trix-editor>
                                            @error('question') <span class="error text-danger">{{ $message }}</span> @enderror    
                                        </div>    
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input wire:model.defer="search" type="text" class="form-control" placeholder="Cari pertanyaan" aria-label="">
                                <div class="input-group-append">
                                    <button wire:click="updateSearch" class="btn btn-primary" type="button"><i class="fas fa-search"></i> Cari</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Pertanyaan Terbaru</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                        @foreach ($questions as $question)
                        <li class="media">
                            @if ($question->answer)
                            <figure class="avatar mr-2 avatar-lg mx-4">
                                <img src="{{ asset('assets-app/img/avatar/avatar-2.png') }}"  alt="...">
                                <img src="{{ asset('assets-app/img/avatar/avatar-4.png') }}" class="avatar-icon " alt="...">
                            </figure>
                            @else
                            <img alt="image" class="mr-3 rounded-circle mx-4" width="63" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}">
                            @endif
                            <div class="media-body">
                                @if ($question->status == 'Menunggu Jawaban')
                                <div class="media-right"><div class="text-warning">{{ $question->status }}</div></div>
                                @else
                                <div class="media-right"><div class="text-primary">{{ $question->status }}</div></div>
                                @endif
                                <div class="media-title mb-1 d-inline">{{ $question->user->name }}</div>
                                @if ($question->status == 'Terjawab')
                                <div class="media-title mb-1 d-inline">
                                    <small class="text-primary"> Dijawab oleh : </small>
                                    {{ $question->consultant->name }}
                                </div>
                                @endif
                                <div class="text-time">{{ $question->created_at->diffForHumans() }}</div>
                                <div class="media-description text-muted">{!! $question->question !!}</div>
                                <div class="media-links">
                                @if ($question->answer)
                                <a href="#" class="text-primary">Lihat Jawaban <i class="fas fa-angle-right"></i></a>
                                <div class="bullet"></div>
                                @endif
                                @if ($question->user_id == auth()->id())
                                <a href="#" class="text-danger" wire:click="deleteQuestion({{ $question->id }})">Hapus</a>
                                @endif
                                </div>
                            </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>

@push('script')
    <script>
        // trix hidden attach file
            document.addEventListener("trix-file-accept", function(event) {
                event.preventDefault();
            });
    </script>
@endpush
