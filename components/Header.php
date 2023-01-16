<!-- main header [ begin ] -->
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header class="main__header">
    <nav class="main__header__nav">
      <ul class="main__header__nav__menus">
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'index') ? 'active':''; ?>" href="./">Home</a>
        </li>
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a>
        </li> 
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'QDripper') ? 'active':''; ?>" href="QDripper.php">Innovation</a>
          <ul class="sub-menu">
            <li class="sub-menu__list">
              <a class="sub-menu__list--link" href="QDripper.php">Q Dripper</a>
            </li> 
            <li class="sub-menu__list">
              <a class="sub-menu__list--link" href="register.php">Register Your Interest</a>
            </li> 
          </ul>
        </li>
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'coffee') ? 'active':''; ?>" href="coffee.php">Coffee</a>
        </li>
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'coffee-concept') ? 'active':''; ?>" href="coffee-concept.php">Design Concept</a>
        </li>
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'marchandise') ? 'active':''; ?>" href="marchandise.php">Merchandise</a>
        </li>
        <li class="main__header__nav__menus__list">
          <a class="main__header__nav__menus__list--link <?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- main header [ end ] -->