<?php
include_once 'header.php';
$cnt = "SELECT COUNT(*) AS count FROM `swvideos`";
?>
<div class="content">
  <h2>soulwinning</h2>
  <div class="video-container">
    <video class="video" controls src="https://www.kjv1611only.com/video/04sw/Motivation/Summer_Motivation.mp4" poster="https://biblelaw.allthepreaching.com/images/soulwinning.png"></video>
  </div>
  <div class="docs-container">
    <div class="sw-booklet">
      <a target="_blank" href="https://flipbookpdf.net/web/site/8073761ea240888c8d70d8703b267fb30e9f0538202208.pdf.html">Download our Soulwinning Booklet (pdf file)</a>
    </div>
    <div class="sw-tracker">
      <a href="SW_Tracker.xlsx">Download our Soulwinning Tracker (xlsx file)</a>
    </div>
  </div>
  <div class="category-title">
    <h3 class="underline">tips</h3>
  </div>
  <div class="row">
    <?php
    $countQuery = $cnt;
    $countResult = mysqli_query($conn, $countQuery);
    while ($row = mysqli_fetch_assoc($countResult)) {
      $countOutput = $row['count'];
    }
    $codeQuery = $mysqli->query("SELECT * FROM swvideos WHERE vid_category = 'swtips' ORDER BY vid_title ASC");
    $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
    $codeCount = count($codes);
    const COLUMNS = 3;
    $base = floor($codeCount / COLUMNS);
    $remainder = $codeCount % COLUMNS;
    $chunks = [];
    for ($start = 0; $start < $codeCount; $start += $length) {
      $length = $base + ($remainder-- > 0 ? 1 : 0);
      $chunks[] = array_slice($codes, $start, $length);
    }
    ?>
    <!-- COLUMN 1 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[0] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 2 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[1] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 3 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[2] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="category-title">
    <h3 class="underline">motivation</h3>
  </div>
  <div class="row">
    <?php
    $countQuery = $cnt;
    $countResult = mysqli_query($conn, $countQuery);
    while ($row = mysqli_fetch_assoc($countResult)) {
      $countOutput = $row['count'];
    }
    $codeQuery = $mysqli->query("SELECT * FROM swvideos WHERE vid_category = 'swmotivation' ORDER BY vid_title ASC");
    $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
    $codeCount = count($codes);
    $base = floor($codeCount / COLUMNS);
    $remainder = $codeCount % COLUMNS;
    $chunks = [];
    for ($start = 0; $start < $codeCount; $start += $length) {
      $length = $base + ($remainder-- > 0 ? 1 : 0);
      $chunks[] = array_slice($codes, $start, $length);
    }
    ?>
    <!-- COLUMN 1 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[0] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 2 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[1] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 3 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[2] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
  </div>
  <div class="category-title">
    <h3 class="underline">seminars</h3>
  </div>
  <div class="row">
    <?php
    $countQuery = $cnt;
    $countResult = mysqli_query($conn, $countQuery);
    while ($row = mysqli_fetch_assoc($countResult)) {
      $countOutput = $row['count'];
    }
    $codeQuery = $mysqli->query("SELECT * FROM swvideos WHERE vid_category LIKE '%sws%' ORDER BY vid_title ASC");
    $codes = $codeQuery->fetch_all(MYSQLI_ASSOC);
    $codeCount = count($codes);
    $base = floor($codeCount / COLUMNS);
    $remainder = $codeCount % COLUMNS;
    $chunks = [];
    for ($start = 0; $start < $codeCount; $start += $length) {
      $length = $base + ($remainder-- > 0 ? 1 : 0);
      $chunks[] = array_slice($codes, $start, $length);
    }
    ?>
    <!-- COLUMN 1 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[0] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 2 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[1] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
    <!-- COLUMN 3 -->
    <div class="col">
      <ul class="simple">
        <?php
        foreach ($chunks[2] as $data) {
          echo $data['vid_code'];
        }
        ?>
      </ul>
    </div>
  </div>
</div>
</body>

</html>