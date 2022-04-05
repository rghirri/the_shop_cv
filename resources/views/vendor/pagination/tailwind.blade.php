@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="navigation align-center">

 <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

  <div>
   <span class="relative z-0 inline-flex shadow-sm rounded-md">
    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <span aria-disabled="true">
     <span
      class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
    </span>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <a class="page-numbers bg-border-color current" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
     {{ $page }}
    </a>
    @else
    <a href="{{ $url }}" class="page-numbers bg-border-color"
     aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
     {{ $page }}
    </a>
    @endif
    @endforeach
    @endif
    @endforeach

   </span>
  </div>
 </div>
</nav>
@endif