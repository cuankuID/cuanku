<div>
    <div class="main-content">
        <section class="section">
            @include('components.header-app', ['title' => 'Jawab Pertanyaan'])
            
            <div class="card">
                <div class="card-header">
                    <div>
                        <label for="">Status Pertanyaan : </label>
                        <select class="form-control-sm" wire:model="status">
                            <option value="Menunggu Jawaban">Belum Terjawab</option>
                            <option value="Terjawab">Terjawab</option>
                            {{-- <option value="3">Three</option> --}}
                        </select>    
                    </div>

                    <div class="card-header-action">
                        <div class="input-group">
                            <input wire:model.defer="search" type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button wire:click="updateSearch" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                        @foreach ($questions as $question)
                        <li class="media">
                            <img alt="image" class="mr-3 rounded-circle" width="70" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}">
                            <div class="media-body">
                                @if ($question->status == 'Menunggu Jawaban')
                                <div class="media-right"><div class="text-warning">{{ $question->status }}</div></div>
                                @else
                                <div class="media-right"><div class="text-primary">{{ $question->status }}</div></div>
                                @endif
                                <div class="media-title mb-1">{{ $question->user->name }}</div>
                                <div class="text-time">{{ $question->created_at->diffForHumans() }}</div>
                                <div class="media-description text-muted">{!! $question->question !!}</div>
                                <div class="media-links">
                                <a href="{{ route('show.answer-question', ['askConsultant' => $question->id]) }}" class="badge badge-primary text-white">Jawab Pertanyaan <i class="fas fa-angle-right"></i></a>
                                {{-- <div class="bullet"></div>
                                <a href="#">Edit</a> --}}
                                <div class="bullet"></div>
                                <a href="#" class="text-danger" wire:click="deleteQuestion({{ $question->id }})">Hapus</a>
                                </div>
                            </div>
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
