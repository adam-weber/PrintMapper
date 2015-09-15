<?php include("../admin_files/header.php"); ?>
<body>
  <div id="state-started">
    <div class="pane-stack">
      <div class="pane pane-group">
        <header class="pane-header">
          <a href="#pane-edit" class="pane-selected">Edit</a>
          <a target="_blank" href="#pane-preview">Preview</a>
        </header>
        <div class="pane-content pane-selected" id="pane-edit">
          <nav>
            <a id="area-remove" href=#>Remove</a>
          </nav>
          <div id="canvas-wrapper">
            <canvas id="map"data-girar="0"></canvas>
          </div>
        </div>
        <div class="pane-content" id="pane-preview"></div>
      </div>
    </div>
    <div id="pane-stack-container">
      <div id="posX"></div>
      <div id="posY"></div>
      <div class="pane-stack">
        <div class="pane">
          <header class="pane-header pane-attr">
            <h2>Printer Info</h2>
          </header>
          <form class="pane-content" id="pane-info">
            <ul>
              <li id="field-url">
                <label for=url>Path</label>
                <input id="url" name="url" disabled placeholder="\\path\printer">
              </li>
              <li id="field-alt">
                <label for=alt>Name</label>
                <input id="alt" name="alt" disabled placeholder="Engineering Canon">
              </li>
              <li id="field-x">
                <label for=x>X</label>
                <input id="x" name="id" type="number" min="0" disabled>
              </li>
              <li id="field-y">
                <label for=y>Y</label>
                <input id="y" name="y" type="number" min="0" disabled>
              </li>
              <li id="field-height">
                <label for="height">Height</label>
                <input id="height" name="height" type="number" min="0" disabled>
              </li>
              <li id="field-width">
                <label for="width">Width</label>
                <input id="width" name="width" type="number" min="0" disabled>
              </li>
            </ul>
          </form>
        </div>
        <div class="pane">
          <header class="pane-header pane-attr">
            <h2>Printer Map Code</h2>
          </header>
          <div class="pane-content" id="pane-code">
            <textarea readonly>

            </textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include("../admin_files/js.php"); ?>
