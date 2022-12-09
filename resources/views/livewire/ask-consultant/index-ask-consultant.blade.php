@section('title', 'Cuanku | Tanya Konsultan')

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


            <div class="row py-3 justify-content-center">
                <div class="col-6 col-md-3">
                    <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#askModal">Tanyakan Konsultan!</button>
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
                                <button 
                                    id="showAnswer"
                                    class="btn btn-sm btn-primary rounded-pill"
                                    data-toggle="modal" 
                                    data-target="#showModal"
                                    data-id="{{ $question->id }}"
                                    data-created="{{ $question->created_at->diffForHumans() }}"
                                    data-user="{{ $question->user->name }}"
                                    data-consultant="{{ $question->consultant->name }}"
                                    data-question="{{ $question->question }}"
                                    data-answer="{{ $question->answer }}"
                                >Lihat Jawaban</button>
                                @endif
                                @if ($question->user_id == auth()->id())
                                <div class="bullet"></div>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="askModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Tanya Konsultan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form wire:submit.prevent="sendQuestion">
                <div class="modal-body">
                    <p class="section-lead">
                        Disini anda bisa bertanya mengenai masalah finansial anda dan akan dijawab langsung oleh para konsultan ahli
                    </p>
                    <div wire:ignore>
                        <div class="form-group">
                            <input id="question" type="hidden">
                            <trix-editor wire:model.defer="question" input="question"></trix-editor>
                            @error('question') <span class="error text-danger">{{ $message }}</span> @enderror    
                        </div>    
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="showModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Lihat Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <li class="media">
                        <figure class="avatar mr-2 avatar-lg mx-4">
                            <img src="{{ asset('assets-app/img/avatar/avatar-2.png') }}"  alt="...">
                            <img src="{{ asset('assets-app/img/avatar/avatar-4.png') }}" class="avatar-icon " alt="...">
                        </figure>
                        <div class="media-body">
                            <div class="media-right"><div class="text-primary">Terjawab</div></div>
                            <div class="media-title mb-1 d-inline" id="detail-user"></div>
                            <div class="media-title mb-1 d-inline">
                                <small class="text-primary"> Dijawab oleh : </small>
                                <span id="detail-consultant"></span>
                            </div>
                            <div class="text-time" id="detail-created"></div>
                            <div class="media-description text-muted" id="detail-question"></div>

                            <div class="media mt-3">
                                <div class="media-body">
                                    <p class="text-primary font-weight-bold m-0">Jawaban :</p>
                                    <p class="mb-0" id="detail-answer"></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        // trix hidden attach file
            document.addEventListener("trix-file-accept", function(event) {
                event.preventDefault();
            });

        // Show Modal
        $(document).ready(function(){
            $(document).on('click', '#showAnswer', function(){
                var question = $(this).data('question');
                var answer = $(this).data('answer');
                var user = $(this).data('user');
                var consultant = $(this).data('consultant');
                var created = $(this).data('created');
        
                $('#detail-user').text(user);
                $('#detail-consultant').text(consultant);
                $('#detail-created').text(created);
                $('#detail-question').html(question);
                $('#detail-answer').html(answer);
            })
        });
    </script>
@endpush
