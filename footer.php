<?php defined('_HZEXEC_') or die; ?>

<main>
  <nav>
    <?php
    if (!$errorPage)
    {
      ?>
      <jdoc:include type="modules" name="footer" />
      <?php
    }
    else
    {
      echo Module::position('footer');
    }
    ?>
  </nav>
  <div class="form">
    <?php
    if (!$errorPage)
    {
      ?>
      <jdoc:include type="modules" name="news" />
      <?php
    }
    else
    {
      echo Module::position('news');
    }
    ?>
    <ul class="social">
      <li><a href="https://www.facebook.com/qubeshub"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.7 455.7"><style>.st0{fill:#FFFFFF;}</style><path class="st0" d="M0 0v455.7h242.7v-176h-59.3v-71.9h59.3v-60.4c0-43.9 35.6-79.5 79.5-79.5h62v64.6h-44.4c-13.9 0-25.3 11.3-25.3 25.3v50H383l-9.5 71.9h-59.1v176h141.2V0H0z"/></svg></div><span>Facebook</span></a></li>
      <li><a href="https://twitter.com/qubeshub"><div class="icon"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.7 455.7"><style>.st0{fill:#FFFFFF;}</style><path class="st0" d="M0 0v455.7h455.7V0H0zm361.3 163.9c.1 2.7.2 5.4.2 8.1 0 108.3-87.8 196.2-196.2 196.2-38.6 0-74.5-11.1-104.9-30.4 59.3 8.9 101.1-28.9 101.1-28.9-52.8-4.1-63.3-48.1-63.3-48.1 18.7 3.2 30.4-1.3 30.4-1.3-59.5-13.9-54.4-68.3-54.4-68.3 13.8 8.2 29.7 8.9 29.7 8.9C51.4 153.9 84.3 109 84.3 109c55.1 66.7 136 71.2 141.3 71.4-1.2-5-1.8-10.2-1.8-15.6 0-38 30.8-68.8 68.8-68.8 19.8 0 37.7 8.4 50.2 21.8 3.5-1 6.9-2 10.1-3.1 19.5-6.5 33.4-13.9 33.4-13.9-3.4 20.1-28.2 37-30 38.2-.1 0-.1.1-.1.1h.1c19.3-1.9 38.9-10.1 38.9-10.1-5.8 12.4-30 31.9-33.9 34.9z"/></svg></div><span>Twitter</span></a></li>
      <li><a href="https://www.pinterest.com/qubeshub"><div class="icon"><svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.7 455.7"><style>.st0{fill:#FFFFFF;}</style><path class="st0" d="M0 0v455.7h455.7V0H0zm384.8 289c-35.7 91.1-131.4 123.3-203.2 100.6 5.4-13.3 11.5-26.3 15.9-39.9 4.5-13.7 7.4-27.9 10.7-41 2.9 2.4 5.8 5 8.9 7.4 15.9 12.5 33.8 13.8 52.6 9.2 20-4.8 35.8-16.1 47.5-32.8 19.8-28.2 26.8-60 22-93.5-4.9-34.7-25.5-59.8-57.6-72.4-48.5-19-94.5-12.6-134.3 22.3-30.6 26.8-40.9 72.3-26.2 107.7 5.1 12.3 13.2 21.9 25.4 27.7 6.2 2.9 8.8 1.7 10.6-4.7.1-.5.3-1 .5-1.4 3.4-9 2.6-16.5-3.5-25.2-11.1-15.9-9.1-34.3-3.8-52 10.2-33.5 40.1-55.8 75.1-56.1 9.4-.1 19.1.7 28.1 2.9 27 6.6 44.5 27.5 46.3 55.3 1.4 22.2-2.1 43.8-11.7 64.2-4.8 10.1-11.1 19-20.5 25.3-8.8 5.9-18.5 8.3-29 5.6-14.4-3.8-22.6-17-19-31.4 3.8-15 8.7-29.7 12.4-44.7 1.6-6.3 2.4-13.2 1.8-19.7-1.8-17.6-18.4-25.8-33.9-17.2-10.9 6-16.1 16.1-18.6 27.7-2.5 12-1.3 23.8 2.6 35.4.8 2.3.9 5.2.3 7.6-7.1 30.8-14.6 61.5-21.3 92.4-2 9-1.6 18.5-2.2 27.8-.1 1.8 0 3.6 0 5.9-74.4-31.1-122.8-119.7-92-209.6 30.5-89 129-135.6 217.7-102.6 88.9 33 132.9 131.1 98.4 219.2z"/></svg></div><span>Pintrest</span></a></li>
    </ul>
  </div>
</main>
<div class="aux">
  <div class="brand">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.019 45.662"><g fill="#FFF"><path d="M12.553 40.48c.748-2.228 2.55-5.34 6.83-8.092l-7.317-4.225v-10.66l7.325-4.23c-4.282-2.75-6.084-5.865-6.83-8.09-.048-.14-.078-.27-.118-.404-6.72 3.285-11.36 10.168-11.36 18.153 0 7.962 4.614 14.83 11.305 18.127.052-.193.1-.38.166-.58zM14.434 4.675c1.006 2.89 3.378 5.474 6.87 7.497 3.49-2.023 5.86-4.606 6.867-7.495.08-.23.143-.45.202-.667-2.204-.824-4.58-1.296-7.07-1.296s-4.866.472-7.07 1.295c.06.216.122.435.202.665z"/><path d="M14.004 27.044l7.295 4.21 7.29-4.21v-8.42L21.3 14.41l-7.296 4.213"/><path d="M30.165 4.78c-.04.137-.07.266-.117.405-.75 2.227-2.55 5.343-6.835 8.09l7.316 4.23v10.658l-7.32 4.225c4.283 2.75 6.085 5.864 6.83 8.09.068.202.115.39.17.584 6.693-3.295 11.31-10.164 11.31-18.13 0-7.983-4.638-14.865-11.355-18.15zM28.165 40.984c-1.007-2.884-3.377-5.465-6.865-7.49h-.005c-3.488 2.025-5.86 4.606-6.866 7.49-.103.295-.186.578-.255.85 2.22.838 4.614 1.317 7.125 1.317 2.51 0 4.9-.478 7.118-1.313-.067-.273-.15-.557-.253-.853z"/></g><path fill="#E5E5E5" d="M21.3 14.366L13.966 18.6l7.334 4.234 7.335-4.235"/><path fill="#FFF" d="M13.967 27.066l7.333 4.236v-8.468L13.966 18.6"/><path fill="#C7C8CA" d="M28.633 27.066l.002-8.467-7.335 4.234v8.468"/><g fill="#FFF"><path d="M48.902 22.414c0-6.662 4.72-11.55 11.416-11.55 6.66 0 11.415 4.888 11.415 11.55 0 3.212-1.105 5.993-2.98 8.03l1.84 2.075-2.712 2.278-1.94-2.177c-1.64.872-3.547 1.342-5.62 1.342-6.7 0-11.418-4.887-11.418-11.548zm14.562 7.397l-2.778-3.145 2.744-2.276 2.78 3.145c.97-1.37 1.506-3.146 1.506-5.12 0-4.62-2.91-8.07-7.397-8.07-4.52 0-7.4 3.45-7.4 8.07 0 4.584 2.88 8.065 7.4 8.065 1.17 0 2.205-.235 3.144-.67zM75.485 24.723v-13.49h3.984v13.39c0 3.548 1.975 5.856 5.69 5.856 3.714 0 5.69-2.31 5.69-5.858v-13.39h3.984v13.49c0 5.522-3.18 9.24-9.675 9.24-6.46 0-9.675-3.717-9.675-9.24zM99.59 33.56V11.233h10.98c4.116 0 6.36 2.543 6.36 5.69 0 2.778-1.807 4.688-3.882 5.123 2.41.37 4.316 2.744 4.316 5.458 0 3.48-2.272 6.06-6.492 6.06h-11.28v-.004zm13.324-16.002c0-1.64-1.14-2.88-3.11-2.88h-6.297v5.76h6.296c1.972 0 3.11-1.17 3.11-2.88zm.433 9.44c0-1.67-1.167-3.113-3.382-3.113h-6.46v6.226h6.46c2.113 0 3.382-1.17 3.382-3.11zM121.32 33.56V11.233h15.295v3.446h-11.38v5.757h11.146v3.447h-11.145v6.226h11.38v3.45H121.32zM139.197 30.412l2.208-3.045c1.51 1.64 3.952 3.112 7.067 3.112 3.212 0 4.45-1.574 4.45-3.082 0-4.685-12.987-1.772-12.987-9.973 0-3.717 3.215-6.562 8.133-6.562 3.45 0 6.293 1.138 8.334 3.145l-2.207 2.913c-1.775-1.772-4.15-2.576-6.495-2.576-2.273 0-3.75 1.14-3.75 2.78 0 4.183 12.988 1.606 12.988 9.907 0 3.718-2.642 6.93-8.637 6.93-4.115.002-7.094-1.47-9.103-3.548z"/></g></svg>
    </div>
    <p class="copy">Copyright <?php echo date("Y"); ?> QUBES. Powered by <a href="https://hubzero.org/">HUBzero</a>, a Purdue project</p>
  </div>
  <div class="supported">
    <div class="logo">
      <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 522.2 522.8"><style>.st0{fill:#FFFFFF;} .st1{fill:none;stroke:#FFFFFF;}</style><path class="st0" d="M97.5 316.7c10.6-1.2 15.6-2.5 15.6-14.2v-84.1c-9.9-12.2-12.8-12.8-15.1-12.8v-4.4h37.4L197 277h.4v-53.8c0-10.6-2.1-16.5-16.5-17.6v-4.4H219v4.4c-12.8 1.6-13.8 5.7-13.8 14.2v104.5h-5l-78.9-96.2h-.4v71c0 12.8 3.7 16.1 16.9 17.6v4.4H97.5v-4.4z"/><path class="st1" d="M97.5 316.7c10.6-1.2 15.6-2.5 15.6-14.2v-84.1c-9.9-12.2-12.8-12.8-15.1-12.8v-4.4h37.4L197 277h.4v-53.8c0-10.6-2.1-16.5-16.5-17.6v-4.4H219v4.4c-12.8 1.6-13.8 5.7-13.8 14.2v104.5h-5l-78.9-96.2h-.4v71c0 12.8 3.7 16.1 16.9 17.6v4.4H97.5v-4.4z"/><path class="st0" d="M303.6 236.8c-3.2-12.4-13.8-32.8-34.8-32.8-9.2 0-19 5.3-19 16.9 0 9.6 3.4 13.5 18.3 20.9l26.1 12.9c6 3 19.5 13.3 19.5 32.6 0 15.6-11.4 37.1-44 37.1-16.9 0-24.8-6-30.3-6-3.7 0-4.6 3.2-5.3 6H229v-43.8h5.1c3.6 17.9 13.8 38 36.4 38 21.3 0 22.2-17.6 22.2-19.9 0-11.9-8.3-16.1-19.9-21.6l-11.9-5.7c-30.3-14.6-30.3-29.8-30.3-38 0-10.8 5.5-34.9 39.2-34.9 14.2 0 22.5 5.8 27.7 5.8 4.1 0 5-2.7 5.8-6h5.3v38.5h-5z"/><path class="st1" d="M303.6 236.8c-3.2-12.4-13.8-32.8-34.8-32.8-9.2 0-19 5.3-19 16.9 0 9.6 3.4 13.5 18.3 20.9l26.1 12.9c6 3 19.5 13.3 19.5 32.6 0 15.6-11.4 37.1-44 37.1-16.9 0-24.8-6-30.3-6-3.7 0-4.6 3.2-5.3 6H229v-43.8h5.1c3.6 17.9 13.8 38 36.4 38 21.3 0 22.2-17.6 22.2-19.9 0-11.9-8.3-16.1-19.9-21.6l-11.9-5.7c-30.3-14.6-30.3-29.8-30.3-38 0-10.8 5.5-34.9 39.2-34.9 14.2 0 22.5 5.8 27.7 5.8 4.1 0 5-2.7 5.8-6h5.3v38.5h-5z"/><path class="st0" d="M324.2 201.2h100.6v35.7h-4.2c-3.9-18.4-8.7-29.6-39.2-29.6-9.6 0-12.8.7-12.8 8.3v41.2c22 .4 24.7-12.2 27.1-26.4h4.4v60h-4.4c-1.9-14.5-4.8-27.5-27.1-27.5v41.3c0 11.7 7.1 12.1 19.5 12.6v4.4h-63.9v-4.4c10.1-1.1 15.6-1.6 15.6-12.6v-85.9c0-11.7-7.3-12.1-15.6-12.6v-4.5z"/><path class="st1" d="M324.2 201.2h100.6v35.7h-4.2c-3.9-18.4-8.7-29.6-39.2-29.6-9.6 0-12.8.7-12.8 8.3v41.2c22 .4 24.7-12.2 27.1-26.4h4.4v60h-4.4c-1.9-14.5-4.8-27.5-27.1-27.5v41.3c0 11.7 7.1 12.1 19.5 12.6v4.4h-63.9v-4.4c10.1-1.1 15.6-1.6 15.6-12.6v-85.9c0-11.7-7.3-12.1-15.6-12.6v-4.5z"/><path class="st0" d="M261.1 78C159.8 78 77.7 160.1 77.7 261.4c0 101.3 82.1 183.4 183.4 183.4 101.3 0 183.4-82.1 183.4-183.4C444.5 160.1 362.4 78 261.1 78m0 363.1c-99.2 0-179.7-80.4-179.7-179.7 0-99.2 80.5-179.7 179.7-179.7 99.2 0 179.7 80.5 179.7 179.7 0 99.3-80.4 179.7-179.7 179.7"/><path class="st1" d="M261.1 78C159.8 78 77.7 160.1 77.7 261.4c0 101.3 82.1 183.4 183.4 183.4 101.3 0 183.4-82.1 183.4-183.4C444.5 160.1 362.4 78 261.1 78zm0 363.1c-99.2 0-179.7-80.4-179.7-179.7 0-99.2 80.5-179.7 179.7-179.7 99.2 0 179.7 80.5 179.7 179.7 0 99.3-80.4 179.7-179.7 179.7z"/><path class="st0" d="M481.8 232.7c-1.7-4.4-3.2-8.8-4.6-13.2-.8-8.4-.9-16.7-.7-24 3-15.6 14.3-23.9 27.9-29-1.6-4-3.5-8.7-4.9-12-14.6 7.1-32.2 8.4-45.4-4.1-2.8-3-5.6-6-8.2-9.2-4.4-8-7.9-16.3-10.7-23.6-3.2-15.6 4.1-27.6 14.7-37.5-3-3.1-6.6-6.7-9.1-9.2-10.8 12.1-26.6 20-43.6 13.6-3.3-1.5-6.5-3-9.7-4.6-7.4-5.8-14.1-12.4-19.7-18.3-8.9-13.2-6.8-27-.8-40.2-3.9-1.7-8.6-3.6-11.9-5-5.3 15.3-16.9 28.7-35.1 29.2-5.5-.2-11.1-.5-16.6-1.1-7.1-2.3-13.8-5.1-19.6-7.7C270.5 28 267.2 14.4 267.7 0h-13.1c.9 16.2-4.6 33-21.2 40.4-3.8 1.5-7.7 2.8-11.6 4.1-9 1-18 1.1-25.8.9-15.6-3-23.9-14.3-29-27.9-4 1.6-8.7 3.5-11.9 4.9 7.1 14.6 8.3 32.2-4.1 45.5-3.3 3.2-6.8 6.2-10.3 9.2-7.8 4.2-15.8 7.6-22.9 10.4C102 90.6 90 83.3 80.1 72.8c-3.1 3-6.7 6.6-9.2 9.1 12.1 10.8 20 26.6 13.6 43.6-1.6 3.5-3.2 7.1-5 10.5-5.6 7-11.8 13.2-17.4 18.5-13.2 8.9-27 6.8-40.2.8-1.7 3.9-3.6 8.6-5 11.9 15.4 5.3 28.7 16.9 29.2 35.1-.1 4.8-.4 9.7-.8 14.5-2.4 7.9-5.5 15.4-8.4 22-8.8 13.3-22.4 16.6-36.8 16.1-.1 4.2-.1 9.3-.1 12.9 16.2-.9 33 4.6 40.4 21.2 1.5 3.9 2.9 7.9 4.2 11.9 1 9 1 17.9.9 25.7-3 15.6-14.3 23.9-27.9 29 1.6 4 3.5 8.7 4.9 12 14.6-7.1 32.2-8.3 45.5 4.2 3.1 3.3 6.1 6.7 9.1 10.1 4.2 7.8 7.6 15.8 10.3 22.8 3.2 15.6-4.1 27.5-14.7 37.4 3 3 6.6 6.7 9.1 9.2 10.8-12.1 26.6-20 43.6-13.6 3.8 1.7 7.5 3.5 11.2 5.4 6.9 5.6 13.1 11.7 18.4 17.3 8.9 13.2 6.8 27 .8 40.2 3.9 1.7 8.6 3.6 11.9 5 5.3-15.4 16.9-28.7 35.1-29.2 4.6.1 9.3.4 13.9.8 8.3 2.5 16.2 5.7 23.1 8.7 13.3 8.8 16.6 22.4 16.1 36.8 4.3.1 9.4.1 12.9.1-.9-16.2 4.6-33 21.2-40.4 4.4-1.7 8.8-3.2 13.3-4.6 8.4-.8 16.7-.9 23.9-.7 15.6 3 23.9 14.3 29 27.9 4-1.6 8.7-3.5 12-4.9-7.1-14.6-8.3-32.2 4.2-45.5 3.3-3.2 6.8-6.2 10.3-9.2 7.4-3.9 15-7.1 21.8-9.8 15.6-3.2 27.5 4.1 37.4 14.7 3.1-3 6.7-6.6 9.2-9.1-12.1-10.8-20-26.6-13.6-43.6 2.1-4.7 4.4-9.4 6.8-14 5.2-6.3 10.9-12 16-16.8 13.2-8.9 27-6.8 40.2-.8 1.7-3.9 3.6-8.6 5-11.9-15.3-5.3-28.7-16.9-29.2-35.1.1-5.1.4-10.2.9-15.3 2.4-7.5 5.3-14.6 8.1-20.8 8.8-13.3 22.4-16.6 36.8-16.1.1-4.3.1-9.4.1-12.9-16.2.9-32.9-4.6-40.4-21.2m-11.4 7.5l-2.2 2.8c-4.4 4.3-11.4 2.8-17.1 2.4-3.8-.9-7.5-1.8-11.2-2.7.5 4.9.8 9.9.9 14.9.1.1.2.1.3.2 1 2.1.7 3.7-.2 4.9 0 5.2-.3 10.4-.8 15.5 4.5-1.1 9.1-2.1 13.7-2.9 4.8-.5 10.1-.9 13.6 2.8 4 6.7 2.6 17.4 1.8 25.1 0 .5-.1 1-.2 1.5-1.3 5.8-2.9 11.7-6 16.9l-3.1 1.8c-5.7 2.3-11.6-1.8-16.7-4.4-3.2-2.3-6.4-4.6-9.5-6.9-1.4 4.8-3 9.5-4.8 14 .1.1.2.3.3.4.1 2.5-.8 3.8-2.3 4.6-2 4.8-4.2 9.4-6.6 13.9 4.7.7 9.3 1.6 13.9 2.6 4.6 1.4 9.7 3 11.5 7.8 1.1 7.7-4.3 17.1-8 23.9l-.3.6c-3.7 5.3-7.7 10.8-13.1 14.9l-3.6.5c-6.1-.1-10.1-6.1-13.8-10.4l-6.3-10.2c-3.1 3.8-6.4 7.5-9.8 11 .1.2.1.5.2.7-.9 2.5-2.4 3.3-4.3 3.4-3.6 3.5-7.4 6.9-11.3 10.2 4.1 2.5 8.2 5.1 12.1 7.9 3.8 3.1 7.8 6.5 7.6 11.6-1.8 7-9.3 13.1-15.1 17.9-5.8 3.7-11.9 7.7-19 9.5l-3.5-.9c-5.6-2.4-7-9.4-8.8-14.9-.6-4-1.3-7.9-1.9-11.8-4.3 2.3-8.7 4.5-13.3 6.5 0 .2-.1.5-.1.7-1.8 1.9-3.5 2.1-5.1 1.5-4.7 1.9-9.5 3.6-14.4 5.1 2.8 3.8 5.6 7.8 8.1 11.8 2.3 4.3 4.7 9 2.6 13.6-4.3 5.8-13.7 8.6-21 10.8-6.8 1.3-14.1 2.6-21.4 1.6l-2.8-2.2c-4.3-4.4-2.8-11.4-2.4-17.1 1-3.9 1.8-7.7 2.8-11.6-4.9.5-9.8.8-14.8.9l-.3.6c-2.3 1.1-4 .6-5.3-.5-5.1 0-10.2-.3-15.2-.8 1.1 4.6 2.1 9.3 3 14 .5 4.8 1 10.1-2.8 13.6-6 3.6-15.5 2.8-22.9 2-7.1-1.5-14.8-3.1-21.5-7l-1.8-3.1c-2.3-5.7 1.7-11.6 4.4-16.7 2.3-3.2 4.6-6.4 6.9-9.5-4.8-1.4-9.4-3-14-4.8-.1.1-.3.2-.4.3-2.5.1-3.8-.9-4.6-2.4-4.7-2-9.4-4.2-13.9-6.7-.7 4.7-1.6 9.4-2.6 14-1.4 4.6-3 9.7-7.8 11.5-6.3.9-13.9-2.6-20.1-5.9-6.3-4.3-13.2-8.8-18.1-15.3l-.4-3.6c.1-6.1 6-10.1 10.4-13.8 3.3-2 6.6-4 9.9-6.1-3.9-3.1-7.6-6.4-11.2-9.9-.1 0-.2.1-.3.1-2.2-.8-3.1-2.1-3.3-3.6-3.6-3.7-7.1-7.5-10.4-11.5-2.4 4-5 7.9-7.7 11.8-3.1 3.8-6.5 7.8-11.6 7.6-6.6-1.7-12.5-8.5-17.1-14.2-4.1-6.3-8.7-13.1-10.7-20.8l.9-3.5c2.4-5.6 9.4-7 14.9-8.7 3.8-.6 7.6-1.2 11.3-1.8-2.3-4.4-4.5-8.8-6.5-13.4H96c-1.7-1.6-2-3.1-1.7-4.5-1.9-4.8-3.7-9.7-5.2-14.8-3.8 2.8-7.6 5.4-11.6 7.9-4.3 2.3-9 4.7-13.6 2.6-5.1-3.8-7.9-11.5-10-18.3-1.4-7.7-3.3-16.1-2.1-24.4l2.2-2.8c4.4-4.3 11.4-2.8 17.1-2.4 3.7.9 7.4 1.8 11.2 2.7-.5-4.9-.7-9.8-.8-14.8-.1-.1-.2-.1-.2-.2-1-2.1-.7-3.7.2-4.9.1-5.2.4-10.4.9-15.5-4.6 1.1-9.2 2.1-13.8 2.9-4.8.5-10.1 1-13.6-2.8-3.9-6.5-2.6-16.9-1.8-24.5 1.4-6.5 3-13.3 6.5-19.3l3.1-1.8c5.7-2.3 11.6 1.7 16.7 4.4 3.2 2.4 6.5 4.7 9.7 7 1.4-4.7 3-9.4 4.8-13.9-.2-.2-.3-.5-.5-.7-.1-2.7 1.1-4.1 2.8-4.8 2-4.6 4.2-9.2 6.6-13.6-4.8-.7-9.6-1.6-14.4-2.7-4.6-1.4-9.7-3-11.5-7.8-.9-6 2.3-13.2 5.5-19.3 4.4-6.3 8.9-13.4 15.5-18.4l3.6-.5c6.1.1 10.1 6.1 13.8 10.4 2.1 3.4 4.2 6.8 6.2 10.2 3.1-3.8 6.4-7.5 9.8-11.1-.1-.2-.1-.4-.2-.7.9-2.4 2.4-3.3 4.1-3.4 3.6-3.6 7.4-7 11.3-10.2-4.1-2.5-8.1-5.1-12-7.8-3.8-3.1-7.8-6.5-7.6-11.6 1.7-6.6 8.6-12.5 14.3-17.2 6.4-4.1 13.1-8.8 21-10.8l3.5.9c5.6 2.4 7 9.4 8.7 14.9.6 3.9 1.2 7.8 1.9 11.6 4.3-2.3 8.8-4.5 13.3-6.4 0-.2.1-.4.1-.6 1.7-1.9 3.4-2.1 5-1.5 4.7-1.9 9.6-3.6 14.5-5-2.9-3.9-5.6-7.8-8.2-11.9-2.3-4.3-4.7-9-2.6-13.6 3.7-5 11.2-7.8 17.9-9.8 7.8-1.4 16.2-3.3 24.6-2.2l2.8 2.2c4.3 4.4 2.8 11.4 2.4 17.1-.9 3.8-1.8 7.6-2.7 11.5 4.9-.5 9.8-.7 14.7-.8l.3-.6c2.4-1.1 4-.6 5.3.5 5.1.1 10.2.4 15.3.9-1.2-4.7-2.2-9.4-3-14.1-.5-4.8-1-10.1 2.8-13.6 6.7-4 17.5-2.6 25.1-1.8 1.6.2 3.2.4 4.8.7 4.7 1.2 9.4 2.7 13.7 5.2l1.8 3.1c2.3 5.7-1.7 11.6-4.4 16.7-2.5 3.4-5 6.9-7.5 10.3 4.6 1.4 9.2 3 13.7 4.7.4-.3.9-.6 1.3-.9 3.1-.1 4.4 1.4 5.1 3.6 4.5 2 8.9 4.1 13.2 6.4.7-5 1.6-10 2.7-15 1.4-4.6 3-9.7 7.8-11.5 5.6-.8 12.1 1.8 17.8 4.8 6.7 4.8 14.7 9.5 20.1 16.7l.5 3.6c-.1 6.1-6 10.1-10.4 13.8-3.5 2.1-6.9 4.3-10.4 6.4 3.8 3.1 7.5 6.3 11.1 9.7.3-.1.6-.2.9-.2 2.6.9 3.4 2.6 3.4 4.4 3.5 3.6 6.9 7.3 10.1 11.2 2.5-4.2 5.1-8.2 7.9-12.2 3.1-3.8 6.5-7.8 11.6-7.6 6 1.5 11.5 7.4 15.9 12.7 4.3 6.7 9.3 13.8 11.5 22l-.9 3.5c-2.4 5.6-9.5 7-14.9 8.7-3.8.6-7.7 1.2-11.5 1.8 2.4 4.3 4.5 8.8 6.5 13.4.1 0 .2 0 .3.1 1.7 1.6 2.1 3.1 1.7 4.7 1.9 4.8 3.7 9.7 5.2 14.6 3.8-2.8 7.6-5.4 11.6-7.9 4.3-2.3 9-4.7 13.6-2.6 5.7 4.3 8.6 13.6 10.7 20.8 1.6 6.8 2.9 14.1 1.9 21.4"/></svg>
    </div>
    <div class="logo">
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 225.36 225.28"><defs><style>.cls-1{fill:none;}.cls-2{fill:#fff;}</style></defs><rect class="cls-1" y="0.03" width="225.36" height="225.22"/><rect class="cls-2" x="32.36" y="0.06" width="6.75" height="125.28"/><path class="cls-2" d="M682,494.23h59.91v-6.75H682V379h-6.75v54.65H665V379h-6.75v54.63H604.85V379h-6.76v61.38h60.14v10.22h-60v53.72H605v-47h53.24V604.27H665v-93h10.25l0,32h66.72v-6.76l-59.93,0,0-25.22h59.91v-6.75H682Zm-17-53.84h10.28v10.22H665Zm0,17h10.28v30.12H665Zm10.27,47.12H665V494.23h10.27Z" transform="translate(-548.92 -378.99)"/></svg>
    </div>
    <p class="copy">QUBES is supported by the <a href="https://www.nsf.gov">National Science Foundation</a> and <a href="/community/partners">other funding agencies</a></p>
  </div>
  <nav class="legal">
    <div class="inner">
      <ul>
        <li><a href="/terms">Terms of Use</a></li>
        <li><a href="/terms#codeofconduct">Code of Conduct</a></li>
        <li><a href="/terms#privacy">Privacy Policy</a></li>
      </ul>
    </div>
  </nav>
</div>
