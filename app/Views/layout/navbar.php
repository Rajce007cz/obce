
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
      <?php 
            foreach ($okresy as $x) { ?>
            <li class="nav-item">
            <?php
                echo anchor('/', 'Main Page',['class'=> 'nav-link']);
            ?>
            </li>
            <?php } ?>
        </div>
      </ul>
    </div>
  </div>
</nav>