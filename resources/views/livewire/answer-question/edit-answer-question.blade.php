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
            @include('components.header-app', ['title' => 'Jawab Pertanyaan'])

            <div class="card">
                <div class="card-header">
                    <h4>Nesting</h4>
                </div>
                <div class="card-body">
                    <div class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}">
                        <div class="media-body">
                            @if ($askConsultant->status == 'Menunggu Jawaban')
                            <div class="media-right"><div class="text-warning">{{ $askConsultant->status }}</div></div>
                            @else
                            <div class="media-right"><div class="text-primary">{{ $askConsultant->status }}</div></div>
                            @endif
                        <div class="media-title mb-1">{{ $askConsultant->user->name }}</div>
                        <div class="text-time">{{ $askConsultant->created_at->diffForHumans() }}</div>
                        <p>{!! $askConsultant->question !!}</p>
                        
                        @if ($askConsultant->answer)
                        <div class="media mt-3">
                            <a class="pr-3" href="#">
                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}">
                            </a>
                            <div class="media-body">
                            <div class="media-title mb-1">{{ $askConsultant->consultant->name }}</div>
                            <div class="text-time">{{ $askConsultant->updated_at->diffForHumans() }}</div>
                            <p class="mb-0">{!! $askConsultant->answer !!}</p>
                            </div>
                        </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div>
                        <h4>Jawab Pertanyaan</h4>
                    </div>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="mycard-collapse">
                    <form wire:submit.prevent="editAnswer">
                        <div class="card-body">
                            <div wire:ignore>
                                <div class="form-group">
                                    <input id="answer" type="hidden" name="answer" value="{{ old('answer', $askConsultant->answer) }}">
                                    <trix-editor wire:model.defer="answer" input="answer"></trix-editor>
                                    @error('answer') <span class="error text-danger">{{ $message }}</span> @enderror    
                                </div>    
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                        </div>
                    </form>
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
