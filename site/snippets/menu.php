<!-- <div class="navibackground-responsive">
</div>
<div class="start-navibackground">
  <nav role="navigation">
    <ul class="menu cf">
      <?php foreach($pages->visible() as $p): ?>
      <li>
        <a <?php e($p->isOpen(), '') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

        <?php if($p->hasVisibleChildren()): ?>
        <ul class="submenu">
          <?php foreach($p->children()->visible() as $p): ?>
          <li>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

  </li>
<?php endforeach ?>
</ul>


</nav>
</div>


<button class="c-hamburger c-hamburger--htx">
  <span>toggle menu</span>
</button> -->

<header>
      <div id="start-navibackground">
        <nav id="logo">
          <ul class="unterliste1">
            <li><a href="home">BINZENHOF</a></li>
          </ul>
        </nav>          
        <nav id="start-navigation">
          <ul class="unterliste2">
            <li><a href="unser-bauernhof">Unser Bauernhof</a></li>
            <li><a href="events">Events</a></li>         <li><a href="hoflaedeli">Hoflädeli</a></li>
            <li><a href="kontakt">Kontakt</a></li> 
          </ul>
        </nav>
        <button class="c-hamburger c-hamburger--htx">
          <span>toggle menu</span>
        </button>
      </div>
    </header>