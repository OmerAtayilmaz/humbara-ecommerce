<form action="{{route('search')}}" method="GET" class="d-flex nav__form position-relative me-auto mb-sm-0 mb-3" >
    @csrf
    <input name="query" class="form-control nav__search--input py-0" type="text" placeholder="{{__('header.navbar.search')}}" aria-label="Search" />
    <button
    type="submit"
      class="btn nav__form--button color-primary position-absolute top-50 end-0 translate-middle-y rounded-2 py-0"
      style="
          background-color: transparent !important;
          color: var(--primary-color);
          border: none;
        " type="submit">
      <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>
