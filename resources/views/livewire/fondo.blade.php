<div>
    {{-- Do your work, then step back. --}}

    <a wire:click="cambiofondo({{ Auth::user()->id }},'{{ Request::url() }}')" class="nav-link"  role="button" >
        @if(Auth::user()->darkmode)
        <i class="fas fa-toggle-on"></i> 
        @else
        <i class="fas fa-toggle-off"></i>
        @endif
      </a>

    
</div>
