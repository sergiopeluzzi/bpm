<nav class="side-menu">
  <ul class="side-menu-list">
    @if ($tituloPagina == 'Visão Geral')
      <li class="blue opened">
    @else
       <li class="grey">
    @endif
      <a href="{{ route('home') }}">
        <span>
           <i class="font-icon font-icon-dashboard"></i>
           <span class="lbl">Visão Geral</span>
         </span>
       </a>
    </li>
    @if ($tituloPagina == 'Rotinas')
      <li class="blue opened">
    @else
       <li class="grey">
    @endif
      <a href="{{ route('rotinas.index') }}">
        <span>
           <i class="font-icon font-icon-refresh-2"></i>
           <span class="lbl">Rotinas</span>
         </span>
       </a>
    </li>
  </ul>

  <section>
    <header class="side-menu-title">Tags</header>
    <ul class="side-menu-list">
      <li>
        <a href="#">
          <i class="tag-color green"></i>
          <span class="lbl">Website</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="tag-color grey-blue"></i>
          <span class="lbl">Bugs/Errors</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="tag-color red"></i>
          <span class="lbl">General Problem</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="tag-color pink"></i>
          <span class="lbl">Questions</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="tag-color orange"></i>
          <span class="lbl">Ideas</span>
        </a>
      </li>
    </ul>
  </section>
</nav>
