 <!-- Pagination: Basic example -->
 @if ($paginator->hasPages())
 <nav class="pb-5" aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active d-none d-sm-block" aria-current="page">
                        <span class="page-link">
                        {{ $page }}
                        <span class="visually-hidden">(current)</span>
                        </span>
                    </li>
                @else
                <li class="page-item d-none d-sm-block">
                    <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                </li>
               
            @endif
            @endforeach
        @endif
    @endforeach
    </ul>
  </nav>
@endif