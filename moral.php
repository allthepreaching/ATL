<?php include_once 'header.php'; ?>
<!-- FLOAT MENU START -->
<div id="float-menu" class="float-menu">
  <div id="float-toggle" class="float-toggle"></div>
  <ul>

    <?php

    $query = "SELECT * FROM categories WHERE cat = 'Moral Law' ORDER BY section_id ASC";
    $result = mysqli_query($conn, $query);
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<a id="float-link" href="#' . $row['section_id'] . '"><li>' . $row['link_text'] . '</li></a>';
    }
    echo $output;

    ?>

  </ul>
</div>
<!-- FLOAT MENU END -->
<div class="content">
  <!-- MODAL START-->
  <div class="verse-modal" id="verse-modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="modal-verse-container">
        <blockquote id="verse-quote">

        </blockquote>
      </div>
    </div>
  </div>
  <!-- MODAL END -->
  <h2>Moral Laws</h2>
  <h3 id="baptism">BAPTISM</h3>

  <ol>
    <li>
      <span class="main-li">Get Baptized</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Baptism.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: baptism</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 2:38">Acts 2:38</span>
          ,
          <span class="modal-verse" id="Acts 10:48">10:48</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Baptize believers (in the name of The Father, and of The Son, and of The Holy Ghost)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 28:19">Matthew 28:19</span>
        </li>
        <li>
          this is the job of ordained officials but laymen should still encourage new believers to be baptized
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="bible">BIBLE</h3>
  <ol>
    <li>
      <span class="main-li">Read the Bible (daily)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 17:19">Deuteronomy 17:19</span> ,
          <span class="modal-verse" id="Acts 17:11">Acts 17:11</span> ,
          <span class="modal-verse" id="Isaiah 34:16">Isaiah 34:16</span> ,
          <span class="modal-verse" id="1 Timothy 4:13">1 Timothy 4:13</span> ,
          <span class="modal-verse" id="Revelation 1:3">Revelation 1:3</span>
        </li>
        <li>
          jesus rebukes people for not reading:
          <span class="modal-verse" id="Matthew 12:3">Matthew 12:3</span> ,
          <span class="modal-verse" id="Matthew 12:5">12:5</span> ,
          <span class="modal-verse" id="Matthew 19:4">19:4</span> ,
          <span class="modal-verse" id="Matthew 21:16">21:16</span> ,
          <span class="modal-verse" id="Matthew 21:42">21:42</span> ,
          <span class="modal-verse" id="Matthew 22:31">22:31</span> ,
          <span class="modal-verse" id="Mark 2:25">Mark 2:25</span> ,
          <span class="modal-verse" id="Mark 12:10">12:10</span> ,
          <span class="modal-verse" id="Mark 12:26">12:26</span> ,
          <span class="modal-verse" id="Luke 6:3">Luke 6:3</span>
        </li>
        <li>
          <span class="main-li">He that hath ears to hear, let him hear</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Micah 1:2">Micah 1:2</span> ,
              <span class="modal-verse" id="Matthew 11:15">Matthew 11:15</span> ,
              <span class="modal-verse" id="Matthew 13:9">13:9</span> ,
              <span class="modal-verse" id="Matthew 13:18">13:18</span> ,
              <span class="modal-verse" id="Matthew 13:43">13:43</span> ,
              <span class="modal-verse" id="Matthew 15:10">15:10</span> ,
              <span class="modal-verse" id="Matthew 17:5">17:5</span> ,
              <span class="modal-verse" id="Mark 4:3">Mark 4:3</span> ,
              <span class="modal-verse" id="Mark 4:9">4:9</span> ,
              <span class="modal-verse" id="Mark 4:23-24">4:23-24</span> ,
              <span class="modal-verse" id="Mark 7:14">7:14</span> ,
              <span class="modal-verse" id="Mark 7:16">7:16</span> ,
              <span class="modal-verse" id="Luke 8:8">Luke 8:8</span> ,
              <span class="modal-verse" id="Luke 8:18">8:18</span> ,
              <span class="modal-verse" id="Luke 14:35">14:35</span> ,
              <span class="modal-verse" id="Luke 18:6">18:6</span> ,
              <span class="modal-verse" id="2 Timothy 2:7">2 Timothy 2:7</span> ,
              <span class="modal-verse" id="Hebrews 12:25">Hebrews 12:25</span> ,
              <span class="modal-verse" id="Hebrews 13:22">13:22</span> ,
              <span class="modal-verse" id="James 2:5">James 2:5</span> ,
              <span class="modal-verse" id="Revelation 2:7">Revelation 2:7</span> ,
              <span class="modal-verse" id="Revelation 2:11">2:11</span> ,
              <span class="modal-verse" id="Revelation 2:17">2:17</span> ,
              <span class="modal-verse" id="Revelation 2:29">2:29</span> ,
              <span class="modal-verse" id="Revelation 3:6">3:6</span> ,
              <span class="modal-verse" id="Revelation 3:13">3:13</span> ,
              <span class="modal-verse" id="Revelation 3:22">3:22</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">The Bible is our spiritual food</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 4:4">Matthew 4:4</span> ,
              <span class="modal-verse" id="Luke 4:4">Luke 4:4</span> ,
              <span class="modal-verse" id="Deuteronomy 8:3">Deuteronomy 8:3</span> ,
              <span class="modal-verse" id="Ezekiel 2:8">Ezekiel 2:8</span> ,
              <span class="modal-verse" id="Ezekiel 3:1">3:1</span> ,
              <span class="modal-verse" id="Ezekiel 3:3">3:3</span> ,
              <span class="modal-verse" id="Revelation 10:9">Revelation 10:9</span>
            </li>
            <li>
              <span class="main-li">Note: Compare amount of time you
                spend eating to reading or listening to the Bible</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not add or diminish God’s Word/commands</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 4:2">Deuteronomy 4:2</span> ,
          <span class="modal-verse" id="Deuteronomy 12:32">12:32</span> ,
          <span class="modal-verse" id="Proverbs 30:6">Proverbs 30:6</span> ,
          <span class="modal-verse" id="Revelation 22:18-19">Revelation 22:18-19</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="ceremonial-law">CEREMONIAL LAW</h3>
  <ol>
    <li>
      <span class="main-li">make distinction between the ceremonial and moral laws</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:17">Matthew 5:17</span> ,
          <span class="modal-verse" id="Colossians 2:16">Colossians 2:16</span> ,
          <span class="modal-verse" id="1 Corinthians 7:18">1 Corinthians 7:18</span> ,
          <span class="modal-verse" id="Matthew 9:13">Matthew 9:13</span> ,
          <span class="modal-verse" id="Matthew 12:7">Matthew 12:7</span> ,
          <span class="modal-verse" id="Hosea 6:6">Hosea 6:6</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="civil-government">CIVIL GOVERNMENT</h3>
  <ol>
    <li>
      <span class="main-li">Pay taxes:</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 22:21">Matthew 22:21</span> ,
          <span class="modal-verse" id="Mark 12:17">Mark 12:17</span> ,
          <span class="modal-verse" id="Luke 20:25">Luke 20:25</span> ,
          <span class="modal-verse" id="Romans 13:7">Romans 13:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Avoid trouble with the law: by agreeing with thine adversary; handling disputes amongst brethren</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:25-26">Matthew 5:25-26</span> ,
          <span class="modal-verse" id="Matthew 5:40">5:40</span> ,
          <span class="modal-verse" id="Luke 12:57-58">Luke 12:57-58</span> ,
          <span class="modal-verse" id="1 Corinthians 6:1-7">1 Corinthians 6:1-7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t conceal evil doers</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 13:8">Deuteronomy 13:8</span> ,
          <span class="modal-verse" id="Proverbs 28:17">Proverbs 28:17</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="communion">COMMUNION</h3>
  <ol>
    <li>
      <span class="main-li">Eat unleavened bread in remembrance of
        Jesus’ body and drink grape juice (fruit of the vine) in remembrance of
        Jesus’ blood</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 26:26-27">Matthew 26:26-27</span> ,
          <span class="modal-verse" id="Luke 22:19-20">Luke 22:19-20</span> ,
          <span class="modal-verse" id="1 Corinthians 11:24-25">1 Corinthians 11:24-25</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">This is a small gathering (it’s the new testament version of the
        Passover)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:20">1 Corinthians 11:20</span> ,
          <span class="modal-verse" id="Luke 22:15">(Luke 22:15)</span>
        </li>
        <li>
          <span class="main-li">Note: large groups would allow unsaved people to participate to get sick/judged</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">This is a shared meal (must be orderly)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:21-22">1 Corinthians 11:21-22</span> ,
          <span class="modal-verse" id="1 Corinthians 11:33-34">11:33-34</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not do this unworthily (A saved person is worthy, because of God’s righteousness: Example of Judas)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:27-32">1 Corinthians 11:27-32</span> ,
          <span class="modal-verse" id="1 Corinthians 11:18-19">(11:18-19</span> ,
          <span class="modal-verse" id="1 Corinthians 11:23">11:23)</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="disputes">DISPUTES</h3>
  <ol>
    <li>
      <span class="main-li">Avoid conflict</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:30">Proverbs 3:30</span> (requires cause) ,
          <span class="modal-verse" id="Proverbs 10:12">10:12</span> ,
          <span class="modal-verse" id="Proverbs 15:18">15:18</span> ,
          <span class="modal-verse" id="Proverbs 16:28">16:28</span> ,
          <span class="modal-verse" id="Proverbs 17:1">17:1</span> ,
          <span class="modal-verse" id="Proverbs 17:14">17:14</span> ,
          <span class="modal-verse" id="Proverbs 18:6">18:6</span> ,
          <span class="modal-verse" id="Proverbs 20:3">20:3</span> ,
          <span class="modal-verse" id="Proverbs 25:8">25:8</span> ,
          <span class="modal-verse" id="Proverbs 26:17">26:17</span> ,
          <span class="modal-verse" id="Proverbs 26:21">26:21</span> ,
          <span class="modal-verse" id="Romans 13:13">Romans 13:13</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Galatians 5:15">Galatians 5:15</span> ,
          <span class="modal-verse" id="Galatians 5:20">5:20</span> ,
          <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span> ,
          <span class="modal-verse" id="Philippians 2:14">2:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="2 Timothy 2:24">2 Timothy 2:24</span> ,
          <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
          <span class="modal-verse" id="Titus 3:9">3:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Confess your faults one to another</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="James 5:16">James 5:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Yield to judgment from authorities</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 8:3">Ecclesiastes 8:3</span> ,
          <span class="modal-verse" id="Ecclesiastes 10:4">10:4</span> ,
          <span class="modal-verse" id="Micah 7:9">Micah 7:9</span> ,
          <span class="modal-verse" id="Zephaniah 1:7">Zephaniah 1:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Resist not evil (done to you): violence, theft, tribulation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:39-41">Matthew 5:39-41</span> ,
          <span class="modal-verse" id="Luke 6:29">Luke 6:29</span> ,
          <span class="modal-verse" id="Luke 6:30">6:30</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take no heed unto all words that are spoken (of you)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 7:21-22">Ecclesiastes 7:21-22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have long-suffering/forbearance</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 13:4">1 Corinthians 13:4</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Colossians 3:12-13">Colossians 3:12-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Forgive</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
          <span class="modal-verse" id="Proverbs 17:9">Proverbs 17:9</span> ,
          <span class="modal-verse" id="Proverbs 19:11">19:11</span> ,
          <span class="modal-verse" id="Matthew 6:12">Matthew 6:12</span> ,
          <span class="modal-verse" id="Matthew 18:21-35">18:21-35</span> ,
          <span class="modal-verse" id="Mark 11:25">Mark 11:25</span> ,
          <span class="modal-verse" id="Luke 17:3-4">Luke 17:3-4</span> ,
          <span class="modal-verse" id="Ephesians 4:31-32">Ephesians 4:31-32</span> ,
          <span class="modal-verse" id="Colossians 3:13">Colossians 3:13</span> ,
          <span class="modal-verse" id="Colossians 3:19">3:19</span> ,
          <span class="modal-verse" id="Hebrews 12:15">Hebrews 12:15</span> ,
          <span class="modal-verse" id="James 5:9">James 5:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Seek Peace</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 9:50">Mark 9:50</span> ,
          <span class="modal-verse" id="Romans 12:18">Romans 12:18</span> ,
          <span class="modal-verse" id="2 Corinthians 13:11">2 Corinthians 13:11</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Colossians 3:15">Colossians 3:15</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:13">1 Thessalonians 5:13</span> ,
          <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span> ,
          <span class="modal-verse" id="Hebrews 12:14">Hebrews 12:14</span> ,
          <span class="modal-verse" id="1 Peter 3:11">1 Peter 3:11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Avenge not yourselves</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
          <span class="modal-verse" id="Proverbs 20:22">Proverbs 20:22</span> ,
          <span class="modal-verse" id="Proverbs 24:29">24:29</span> ,
          <span class="modal-verse" id="Romans 12:17">Romans 12:17</span> ,
          <span class="modal-verse" id="Romans 12:19">12:19</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:15">1 Thessalonians 5:15</span> ,
          <span class="modal-verse" id="1 Peter 3:9">1 Peter 3:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do violence to no man</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 27:24">Deuteronomy 27:24</span> ,
          <span class="modal-verse" id="Matthew 10:16">Matthew 10:16</span> ,
          <span class="modal-verse" id="Luke 3:14">Luke 3:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not murder</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:13">Exodus 20:13</span> ,
          <span class="modal-verse" id="Exodus 23:7">23:7</span> ,
          <span class="modal-verse" id="Leviticus 18:21">Leviticus 18:21</span> ,
          <span class="modal-verse" id="Deuteronomy 5:17">Deuteronomy 5:17</span> ,
          <span class="modal-verse" id="Deuteronomy 27:25">27:25</span> ,
          <span class="modal-verse" id="Proverbs 6:17">Proverbs 6:17</span> ,
          <span class="modal-verse" id="Ezekiel 22:9">Ezekiel 22:9</span> ,
          <span class="modal-verse" id="Matthew 19:18">Matthew 19:18</span> ,
          <span class="modal-verse" id="Mark 7:21">Mark 7:21</span> ,
          <span class="modal-verse" id="Mark 10:19">10:19</span> ,
          <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
          <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
          <span class="modal-verse" id="Galatians 5:21">Galatians 5:21</span> ,
          <span class="modal-verse" id="1 Timothy 1:9">1 Timothy 1:9</span> ,
          <span class="modal-verse" id="James 2:11">James 2:11</span> ,
          <span class="modal-verse" id="1 Peter 4:15">1 Peter 4:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be ye angry, and sin not (righteous anger)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 4:26">Ephesians 4:26</span>
        </li>
        <li>
          Requires a cause: <span class="modal-verse" id="Matthew 5:22">Matthew 5:22</span>
        </li>
        <li>
          is slow to happen: <span class="modal-verse" id="Proverbs 14:17">Proverbs 14:17</span> ,
          <span class="modal-verse" id="Proverbs 14:29">14:29</span> ,
          <span class="modal-verse" id="Proverbs 15:18">15:18</span> ,
          <span class="modal-verse" id="Proverbs 16:32">16:32</span> ,
          <span class="modal-verse" id="Ecclesiastes 7:9">Ecclesiastes 7:9</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span> ,
          <span class="modal-verse" id="James 1:19">James 1:19</span>
        </li>
        <li>
          ends before sunset (endures but for a moment): <span class="modal-verse" id="Psalm 37:8">Psalm 37:8</span> ,
          <span class="modal-verse" id="Ephesians 4:26">Ephesians 4:26</span> ,
          <span class="modal-verse" id="Colossians 3:8">Colossians 3:8</span>
        </li>
        <li>
          In general, anger is bad: <span class="modal-verse" id="Proverbs 19:11">Proverbs 19:11</span> ,
          <span class="modal-verse" id="Proverbs 27:3-4">27:3-4</span> ,
          <span class="modal-verse" id="Proverbs 29:22">29:22</span> ,
          <span class="modal-verse" id="Proverbs 30:33">30:33</span> ,
          <span class="modal-verse" id="Romans 12:19">Romans 12:19</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="earth-agriculture-animal">EARTH/AGRICULTURE/ANIMAL CRUELTY</h3>
  <ol>
    <li>
      <span class="main-li">Subdue the earth (land)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have dominion over all animals</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Thou shalt not sow thy field with mingled seed (Genetically
        Modified Organisms or seeds)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:19">Leviticus 19:19</span> ,
          <span class="modal-verse" id="Deuteronomy 22:9">Deuteronomy 22:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Thou shalt not let thy cattle gender with a diverse kind
        (result- mules, other animals)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:19">Leviticus 19:19</span> (symbolic of marrying an unbeliever)
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Leave some harvest for the poor/strangers/fatherless/widows</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:9-10">Leviticus 19:9-10</span> ,
          <span class="modal-verse" id="Leviticus 23:22">23:22</span> ,
          <span class="modal-verse" id="Deuteronomy 24:19-22">Deuteronomy 24:19-22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lawful to take a handful of someone’s produce but not to
        gather in a vessel</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:24-25">Deuteronomy 23:24-25</span> ,
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t kill a dam and her young in one day</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:28">Leviticus 22:28</span> ,
          <span class="modal-verse" id="Deuteronomy 22:6-7">Deuteronomy 22:6-7</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span> ,
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not seethe a kid in his mother's milk</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:19">Exodus 23:19</span> ,
          <span class="modal-verse" id="Exodus 34:26">34:26</span> ,
          <span class="modal-verse" id="Deuteronomy 14:21">Deuteronomy 14:21</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not muzzle the ox when he treadeth out the corn</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 25:4">Deuteronomy 25:4</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not plow with an ox and an ass together</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 22:10">Deuteronomy 22:10</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="end-times-prophecy-commands">END TIMES PROPHECY COMMANDS</h3>
  <ol>
    <li>
      <span class="main-li">Watch (don’t sleep): be
        vigilant</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:42-44">Matthew 24:42-44</span> ,
          <span class="modal-verse" id="Matthew 25:13">25:13</span> ,
          <span class="modal-verse" id="Mark 13:33-37">Mark 13:33-37</span> ,
          <span class="modal-verse" id="Luke 12:35">Luke 12:35</span> ,
          <span class="modal-verse" id="Luke 12:40">12:40</span> ,
          <span class="modal-verse" id="Luke 21:34">21:34</span> ,
          <span class="modal-verse" id="Acts 20:31">Acts 20:31</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">1 Corinthians 16:13</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:6-7">1 Thessalonians 5:6-7</span> ,
          <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span> ,
          <span class="modal-verse" id="1 Peter 4:7">1 Peter 4:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Study/observe end times prophecy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:15">Matthew 24:15</span> ,
          <span class="modal-verse" id="Matthew 24:33">24:33</span> ,
          <span class="modal-verse" id="Mark 13:14">Mark 13:14</span> ,
          <span class="modal-verse" id="Mark 13:28-29">28-29</span> ,
          <span class="modal-verse" id="Luke 21:28">Luke 21:28</span> ,
          <span class="modal-verse" id="Luke 21:31">21:31</span> ,
          <span class="modal-verse" id="1 Peter 1:13">1 Peter 1:13</span> ,
          <span class="modal-verse" id="1 Peter 4:7">4:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be not troubled at war or rumors of war</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:6">Matthew 24:6</span> ,
          <span class="modal-verse" id="Mark 13:7">Mark 13:7</span> ,
          <span class="modal-verse" id="Luke 21:9">Luke 21:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t believe false “Christs”</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:4">Matthew 24:4</span> ,
          <span class="modal-verse" id="Matthew 24:23">24:23</span> ,
          <span class="modal-verse" id="Matthew 24:26">24:26</span> ,
          <span class="modal-verse" id="Mark 13:5">Mark 13:5</span> ,
          <span class="modal-verse" id="Mark 13:21">13:21</span> ,
          <span class="modal-verse" id="Luke 21:8">Luke 21:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Let no man deceive you (that day of Christ is at hand)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Thessalonians 2:2-3">2 Thessalonians 2:2-3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know that wickedness will abound in the last days</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Timothy 3:1">2 Timothy 3:1</span> ,
          <span class="modal-verse" id="Jude 1:17-18">Jude 1:17-18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know the desolation is nigh when you see Jerusalem compassed with armies</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 13:28-29">Mark 13:28-29</span> ,
          <span class="modal-verse" id="Luke 21:20">Luke 21:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Count the number of the beast</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Revelation 13:18">Revelation 13:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know that a day with the Lord is as a thousand years</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Peter 3:8">2 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Flee at the abomination of desolation (them in Judaea)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:16">Matthew 24:16</span> ,
          <span class="modal-verse" id="Mark 13:14">Mark 13:14</span> ,
          <span class="modal-verse" id="Luke 21:21">Luke 21:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take nothing with you, Remember Lot’s wife (She looked behind)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:17-18">Matthew 24:17-18</span> ,
          <span class="modal-verse" id="Mark 13:15-16">Mark 13:15-16</span> ,
          <span class="modal-verse" id="Luke 17:31-32">Luke 17:31-32</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray that your flight be not in the winter or Sabbath day</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:20">Matthew 24:20</span> ,
          <span class="modal-verse" id="Mark 13:18">Mark 13:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray you will survive the tribulation, till the 2nd Coming</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 21:36">Luke 21:36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Comfort one another (by reminding them about the 2nd coming of Christ)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Thessalonians 4:18">1 Thessalonians 4:18</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="excommunication">EXCOMMUNICATION</h3>
  <ol>
    <li>
      <span class="main-li">Someone who wrongs another church member and is unrepentant</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 18:15-17">Matthew 18:15-17</span>
        <li>
          <span class="main-li">Principle: Churches have been given authority to kick people out</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:18">Matthew 18:18</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Requires 2 or 3 witnesses</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:16">Matthew 18:16</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Requires bringing the grievance to the whole church</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:17">Matthew 18:17</span>
            </li>
          </ul>
        </li>
    </li>
    </ul>
    </li>
    <li>
      <span class="main-li">Brethren refusing to work</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Thessalonians 3:6">2 Thessalonians 3:6</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:14">3:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">False prophets/false teachers; heretics</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ezekiel 13:9">Ezekiel 13:9</span> ,
          <span class="modal-verse" id="Romans 16:17">Romans 16:17</span> ,
          <span class="modal-verse" id="Galatians 5:12">Galatians 5:12</span> ,
          <span class="modal-verse" id="1 Timothy 6:3-5">1 Timothy 6:3-5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fornicators</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Covetous persons</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span> ,
          <span class="modal-verse" id="Proverbs 23:6-8">Proverbs 23:6-8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Idolaters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Railers (One who scoffs, insults, censures or reproaches with opprobrious language)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Drunkards</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span> ,
          <span class="modal-verse" id="Proverbs 23:20-21">Proverbs 23:20-21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Extortioners</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="false-religion">false religion</h3>
  <ol>
    <li>
      <span class="main-li">Thou shalt have no other gods before me</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:3">Exodus 20:3</span> ,
          <span class="modal-verse" id="Leviticus 19:4">Leviticus 19:4</span> ,
          <span class="modal-verse" id="Deuteronomy 5:7">Deuteronomy 5:7</span> ,
          <span class="modal-verse" id="Deuteronomy 6:14">6:14</span> ,
          <span class="modal-verse" id="Joshua 24:14">Joshua 24:14</span> ,
          <span class="modal-verse" id="Joshua 24:23">24:23</span> ,
          <span class="modal-verse" id="Psalm 81:9">Psalm 81:9</span> ,
          <span class="modal-verse" id="Jeremiah 7:6">Jeremiah 7:6</span> ,
          <span class="modal-verse" id="Ezekiel 14:6">Ezekiel 14:6</span> ,
          <span class="modal-verse" id="Ezekiel 18:6">18:6</span> ,
          <span class="modal-verse" id="Ezekiel 20:18">20:18</span> ,
          <span class="modal-verse" id="Ezekiel 22:9">22:9</span> ,
          <span class="modal-verse" id="Habakkuk 2:19">Habakkuk 2:19</span> ,
          <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
          <span class="modal-verse" id="1 Corinthians 10:7">10:7</span> ,
          <span class="modal-verse" id="1 Corinthians 10:14">10:14</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span> ,
          <span class="modal-verse" id="1 John 5:21">1 John 5:21</span>
        </li>
        <li>
          I don’t think Christians can literally believe in other gods, especially in the NT
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 31:33-34">Jeremiah 31:33-34</span> ,
              <span class="modal-verse" id="Acts 14:15">Acts 14:15</span>
            </li>
            <li>
              but can figuratively make a god out of Money/Self/Belly
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Matthew 6:24">Matthew 6:24</span> ,
                  <span class="modal-verse" id="Ephesians 5:5">Ephesians 5:5</span> ,
                  <span class="modal-verse" id="Philippians 3:19">Philippians 3:19</span> ,
                  <span class="modal-verse" id="Colossians 3:5">Colossians 3:5</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Know that the God of the Bible is the only true God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 4:39">Deuteronomy 4:39</span> ,
              <span class="modal-verse" id="Deuteronomy 7:9-10">7:9-10</span> ,
              <span class="modal-verse" id="Psalm 46:10">Psalm 46:10</span> ,
              <span class="modal-verse" id="Psalm 100:3">100:3</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t serve other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:5">Exodus 20:5</span> ,
              <span class="modal-verse" id="Exodus 23:24">23:24</span> ,
              <span class="modal-verse" id="Deuteronomy 4:19">Deuteronomy 4:19</span> ,
              <span class="modal-verse" id="Deuteronomy 5:9">5:9</span> ,
              <span class="modal-verse" id="Deuteronomy 7:16">7:16</span> ,
              <span class="modal-verse" id="Deuteronomy 11:16">11:16</span> ,
              <span class="modal-verse" id="Deuteronomy 12:30-31">12:30-31</span> ,
              <span class="modal-verse" id="Deuteronomy 13:8">13:8</span> ,
              <span class="modal-verse" id="Joshua 23:7">Joshua 23:7</span> ,
              <span class="modal-verse" id="2 Kings 17:35">2 Kings 17:35</span> ,
              <span class="modal-verse" id="Jeremiah 25:6">Jeremiah 25:6</span> ,
              <span class="modal-verse" id="Matthew 4:10">Matthew 4:10</span> ,
              <span class="modal-verse" id="Luke 4:8">Luke 4:8</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t worship other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 34:14">Exodus 34:14</span> ,
              <span class="modal-verse" id="Deuteronomy 4:19">Deuteronomy 4:19</span> ,
              <span class="modal-verse" id="Deuteronomy 11:16">11:16</span> ,
              <span class="modal-verse" id="Psalm 81:9">Psalm 81:9</span> ,
              <span class="modal-verse" id="Jeremiah 25:6">Jeremiah 25:6</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t bow down to other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:5">Exodus 20:5</span> ,
              <span class="modal-verse" id="Exodus 23:24">23:24</span> ,
              <span class="modal-verse" id="Deuteronomy 5:9">Deuteronomy 5:9</span> ,
              <span class="modal-verse" id="Joshua 23:7">Joshua 23:7</span> ,
              <span class="modal-verse" id="2 Kings 17:35">2 Kings 17:35</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t swear by the names of other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:32">Exodus 23:32</span> ,
              <span class="modal-verse" id="Joshua 23:7">Joshua 23:7</span>
            </li>
          </ul>
        </li>
        <li>
          Make no mention of the names of other gods (In a way that regards them as a real god)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:13">Exodus 23:13</span> ,
              <span class="modal-verse" id="Joshua 23:7">Joshua 23:7</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t sacrifice to other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 18:21">Leviticus 18:21</span> ,
              <span class="modal-verse" id="Deuteronomy 18:10">Deuteronomy 18:10</span> ,
              <span class="modal-verse" id="2 Kings 17:35">2 Kings 17:35</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t fear other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Judges 6:10">Judges 6:10</span> ,
              <span class="modal-verse" id="2 Kings 17:35">2 Kings 17:35</span> ,
              <span class="modal-verse" id="2 Kings 17:37">17:37</span> ,
              <span class="modal-verse" id="2 Kings 17:38">17:38</span> ,
              <span class="modal-verse" id="Jeremiah 10:5">Jeremiah 10:5</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">No Images (statues/pictures)</span>
      <ul class="styled">
        <li>
          Don’t make
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:4">Exodus 20:4</span> ,
              <span class="modal-verse" id="Exodus 20:23">20:23</span> ,
              <span class="modal-verse" id="Exodus 34:17">34:17</span> ,
              <span class="modal-verse" id="Leviticus 19:4">Leviticus 19:4</span> ,
              <span class="modal-verse" id="Leviticus 26:1">26:1</span> ,
              <span class="modal-verse" id="Deuteronomy 4:25">Deuteronomy 4:25</span> ,
              <span class="modal-verse" id="Deuteronomy 5:8">5:8</span> ,
              <span class="modal-verse" id="Deuteronomy 27:15">27:15</span> ,
              <span class="modal-verse" id="Acts 17:29-30">Acts 17:29-30</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t set up
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 26:1">Leviticus 26:1</span> ,
              <span class="modal-verse" id="Deuteronomy 16:22">Deuteronomy 16:22</span> ,
              <span class="modal-verse" id="Deuteronomy 27:15">27:15</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t take/bring
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 7:25-26">Deuteronomy 7:25-26</span> ,
              <span class="modal-verse" id="Deuteronomy 13:17">13:17</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t desire it’s silver/gold
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 7:25-26">Deuteronomy 7:25-26</span>
            </li>
            <li>
              Note: some say it is ok to have a statue or picture if it doesn’t represent a god
              <ul class="styled">
                <li>
                  There were statues in the temple/tabernacle that God commanded or condoned
                  <ul class="sub">
                    <li>
                      <span class="modal-verse" id="Exodus 25:18">Exodus 25:18</span> ,
                      <span class="modal-verse" id="Numbers 21:8">Numbers 21:8</span> ,
                      <span class="modal-verse" id="1 Kings 6:27">1 Kings 6:27</span>
                    </li>
                  </ul>
                </li>
                <li>
                  Exodus 20, v. 4 and v. 5 are one sentence (one command)
                </li>
                <li>
                  Idols are nothing; only if you regard them
                  <ul class="sub">
                    <li>
                      <span class="modal-verse" id="1 Corinthians 10:19">1 Corinthians 10:19</span>
                    </li>
                    <li>
                      But it’s certainly never ok to have a picture or statue of the God of the bible
                      <ul class="styled">
                        <li>
                          <span class="modal-verse" id="Deuteronomy 4:12-18">Deuteronomy 4:12-18</span> ,
                          <span class="modal-verse" id="Acts 17:29">Acts 17:29</span>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Ye shall not observe times</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:26">Leviticus 19:26</span> ,
          <span class="modal-verse" id="Deuteronomy 18:10">Deuteronomy 18:10</span> ,
          <span class="modal-verse" id="Jeremiah 10:2">Jeremiah 10:2</span>
        </li>
        <li>
          Meaning observing pagan holidays. Note: it is put in the same verse as enchantments
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 4:10">Galatians 4:10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Voluntary humility (asceticism); be not righteous over much (going into religious extremes/pushing yourself above what’s required)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 10:15">Proverbs 10:15</span> ,
          <span class="modal-verse" id="Proverbs 30:8">30:8</span> ,
          <span class="modal-verse" id="Colossians 2:18">Colossians 2:18</span> ,
          <span class="modal-verse" id="Colossians 2:23">2:23</span> ,
          <span class="modal-verse" id="1 Timothy 4:1-3">1 Timothy 4:1-3</span> ,
          <span class="modal-verse" id="Ecclesiastes 7:16-18">Ecclesiastes 7:16-18</span> ,
          <span class="modal-verse" id="Ecclesiastes 12:12">12:12</span> ,
          <span class="modal-verse" id="Mark 6:31">Mark 6:31</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Worshiping of angels (over the top exaltation: angelic beings, saints)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Colossians 2:18">Colossians 2:18</span> ,
          <span class="modal-verse" id="Revelation 19:10">Revelation 19:10</span> ,
          <span class="modal-verse" id="Revelation 22:9">22:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Witchcraft (demonic activity)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:26">Leviticus 19:26</span> ,
          <span class="modal-verse" id="Leviticus 19:31">19:31</span> ,
          <span class="modal-verse" id="Leviticus 20:6">20:6</span> ,
          <span class="modal-verse" id="Deuteronomy 18:9-12">Deuteronomy 18:9-12</span> ,
          <span class="modal-verse" id="Deuteronomy 18:14">18:14</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not revile the gods (verbal abuse; rail)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 22:28">Exodus 22:28</span> ,
          <span class="modal-verse" id="2 Peter 2:11">2 Peter 2:11</span> ,
          <span class="modal-verse" id="Jude 1:9-10">Jude 1:9-10</span>
        </li>
        <li>
          Applies to blaming all your problems on the devil/demons
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="family">FAMILY</h3>
  <ol>
    <li>
      <span class="main-li">Marriage</span>
      <ul class="styled">
        <li>
          Leave your parents to get married
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:24">Genesis 2:24</span> ,
              <span class="modal-verse" id="Matthew 19:5">Matthew 19:5</span> ,
              <span class="modal-verse" id="Mark 10:7">Mark 10:7</span> ,
              <span class="modal-verse" id="Ephesians 5:31">Ephesians 5:31</span>
            </li>
            <li>
              Note: there are exceptions to this rule including ministry work (Paul, etc.)
            </li>
          </ul>
        </li>
        <li>
          Husbands rule over their wives (leadership)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 3:16">Genesis 3:16</span> ,
              <span class="modal-verse" id="1 Corinthians 11:3">1 Corinthians 11:3</span> ,
              <span class="modal-verse" id="1 Timothy 2:12-13">2:12-13</span> ,
              <span class="modal-verse" id="1 Timothy 3:5">3:5</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span>
            </li>
          </ul>
        </li>
        <li>
          Husbands dwell with your wife according to knowledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Peter 3:7">1 Peter 3:7</span>
            </li>
          </ul>
        </li>
        <li>
          Cheer up your wife
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:5">Deuteronomy 24:5</span> ,
              <span class="modal-verse" id="Proverbs 5:18-19">Proverbs 5:18-19</span> ,
              <span class="modal-verse" id="Ecclesiastes 9:9">Ecclesiastes 9:9</span> ,
              <span class="modal-verse" id="Ephesians 5:29">Ephesians 5:29</span>
            </li>
          </ul>
        </li>
        <li>
          Wife’s role: homemaker
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 113:9">Psalm 113:9</span> ,
              <span class="modal-verse" id="Proverbs 7:11-12">Proverbs 7:11-12</span> ,
              <span class="modal-verse" id="Proverbs 14:1">14:1</span> ,
              <span class="modal-verse" id="Proverbs 31:27">31:27</span> ,
              <span class="modal-verse" id="Song of Solomon 1:6-8">Song of Solomon 1:6-8</span> ,
              <span class="modal-verse" id="Song of Solomon 8:12">8:12</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> ,
              <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
            </li>
            <li>Note: the wife is a helper to her husband
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="Genesis 2:18">Genesis 2:18</span> ,
                  <span class="modal-verse" id="Proverbs 31:12">Proverbs 31:12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Let every man have his own wife, and let every woman have her own husband
          <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/A_Marriage_Acceptable_To_God.mp4">
            <div class="tooltip">
              <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
              <span class="tooltiptext">sermon: a marriage acceptable to god</span>
            </div>
          </a>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:18">Genesis 2:18</span> ,
              <span class="modal-verse" id="Genesis 2:24">2:24</span> ,
              <span class="modal-verse" id="Proverbs 18:22">Proverbs 18:22</span> ,
              <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span>
            </li>
            <li>
              Major reason to marry: To avoid fornication, better to marry than to burn
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
                  <span class="modal-verse" id="1 Corinthians 7:9">7:9</span>
                </li>
                <li>
                  Note: There is the rare exception to this command
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Do not marry a heathen (unbeliever)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 6:1-6">Genesis 6:1-6</span> ,
              <span class="modal-verse" id="Exodus 34:16">Exodus 34:16</span> ,
              <span class="modal-verse" id="Leviticus 21:14">Leviticus 21:14</span> ,
              <span class="modal-verse" id="Deuteronomy 7:3-4">Deuteronomy 7:3-4</span> ,
              <span class="modal-verse" id="Deuteronomy 23:3">23:3</span> ,
              <span class="modal-verse" id="1 Kings 11:1-2">1 Kings 11:1-2</span> ,
              <span class="modal-verse" id="Ezra 9:1-2">Ezra 9:1-2</span> ,
              <span class="modal-verse" id="Ezra 9:12-14">9:12-14</span> ,
              <span class="modal-verse" id="Ezra 10:2">10:2</span> ,
              <span class="modal-verse" id="Nehemiah 13:1-3">Nehemiah 13:1-3</span> ,
              <span class="modal-verse" id="Nehemiah 13:23-27">13:23-27</span> ,
              <span class="modal-verse" id="Song of Solomon 4:9">Song of Solomon 4:9</span> ,
              <span class="modal-verse" id="Song of Solomon 4:12">4:12</span> ,
              <span class="modal-verse" id="Song of Solomon 5:1">5:1</span> ,
              <span class="modal-verse" id="1 Corinthians 7:39">1 Corinthians 7:39</span> ,
              <span class="modal-verse" id="2 Corinthians 6:14-16">2 Corinthians 6:14-16</span>
            </li>
          </ul>
        </li>
        <li>
          Marriage must be monogamous; Polygamy is a sin
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:24">Genesis 2:24</span> ,
              <span class="modal-verse" id="Leviticus 18:18">Leviticus 18:18</span> ,
              <span class="modal-verse" id="Deuteronomy 17:17">Deuteronomy 17:17</span> ,
              <span class="modal-verse" id="Proverbs 5:15-18">Proverbs 5:15-18</span> ,
              <span class="modal-verse" id="Proverbs 9:16-17">9:16-17</span> ,
              <span class="modal-verse" id="Song of Solomon 4:12-16">Song of Solomon 4:12-16</span> ,
              <span class="modal-verse" id="Matthew 19:4-6">Matthew 19:4-6</span> ,
              <span class="modal-verse" id="Mark 10:5-9">Mark 10:5-9</span> ,
              <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span> ,
              <span class="modal-verse" id="1 Timothy 5:9">5:9</span> ,
              <span class="modal-verse" id="Titus 1:6">Titus 1:6</span>
            </li>
          </ul>
        </li>
        <li>
          Be fruitful and multiply and replenish the earth (birth control is a sin)
          <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Be_Fruitful_And_Multiply.mp4">
            <div class="tooltip">
              <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
              <span class="tooltiptext">sermon: be fruitful and multiply</span>
            </div>
          </a>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span> ,
              <span class="modal-verse" id="Genesis 3:16">3:16</span> ,
              <span class="modal-verse" id="Genesis 9:1">9:1</span> ,
              <span class="modal-verse" id="Genesis 9:7">9:7</span> ,
              <span class="modal-verse" id="Genesis 38:7-10">38:7-10</span> ,
              <span class="modal-verse" id="Proverbs 17:6">Proverbs 17:6</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t charge a man with any business during his first year of marriage (Means any work that physically separates/dislocates you from your spouse. Example: war, overseas trips, etc.)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:5">Deuteronomy 24:5</span> ,
              <span class="modal-verse" id="Proverbs 27:8">Proverbs 27:8</span>
            </li>
          </ul>
        </li>
        <li>
          Defraud ye not one the other, except it be with consent for a time, that ye may give yourselves to fasting and prayer; and come together again
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:10">Exodus 21:10</span> ,
              <span class="modal-verse" id="1 Corinthians 7:3-5">1 Corinthians 7:3-5</span> ,
              <span class="modal-verse" id="Song of Solomon 2:16">Song of Solomon 2:16</span> ,
              <span class="modal-verse" id="Song of Solomon 3:4">3:4</span>
            </li>
          </ul>
        </li>
      </ul>
    <li>
      <span class="main-li">Divorce and Remarriage</span>
      <ul class="styled">
        <li>
          Divorce is a sin
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:21-24">Genesis 2:21-24</span> ,
              <span class="modal-verse" id="Deuteronomy 22:19">Deuteronomy 22:19</span> ,
              <span class="modal-verse" id="Deuteronomy 22:29">22:29</span> ,
              <span class="modal-verse" id="Malachi 2:14-16">Malachi 2:14-16</span> ,
              <span class="modal-verse" id="Matthew 5:31-32">Matthew 5:31-32</span> ,
              <span class="modal-verse" id="Matthew 19:3-6">19:3-6</span> ,
              <span class="modal-verse" id="Mark 10:2-9">Mark 10:2-9</span> ,
              <span class="modal-verse" id="Mark 10:11-12">10:11-12</span> ,
              <span class="modal-verse" id="1 Corinthians 7:10-14">1 Corinthians 7:10-14</span> ,
              <span class="modal-verse" id="Ephesians 5:31">Ephesians 5:31</span> ,
              <span class="modal-verse" id="Hebrews 13:4-5">Hebrews 13:4-5</span>
            </li>
          </ul>
        </li>
        <li>
          Exception to divorce- the cause of fornication
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 22:19">Deuteronomy 22:19</span> ,
              <span class="modal-verse" id="Deuteronomy 22:29">22:29</span> ,
              <span class="modal-verse" id="Deuteronomy 24:1-3">24:1-3</span> ,
              <span class="modal-verse" id="Matthew 1:18-20">Matthew 1:18-20</span> ,
              <span class="modal-verse" id="Matthew 5:32">5:32</span> ,
              <span class="modal-verse" id="Matthew 19:9">19:9</span>
            </li>
            <li>
              Moses permitted this because of the hardness of their hearts but from the beginning it was not so
            </li>
            <ul class="styled">
              <li>
                <span class="modal-verse" id="Matthew 19:7-8">Matthew 19:7-8</span>
              </li>
            </ul>
          </ul>
        </li>
        <li>
          But and if she depart, let her remain unmarried or be reconciled to her husband: (otherwise it is adultery) (same goes for the husband)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:32">Matthew 5:32</span> ,
              <span class="modal-verse" id="Luke 16:18">Luke 16:18</span> ,
              <span class="modal-verse" id="1 Corinthians 7:11">1 Corinthians 7:11</span>
            </li>
          </ul>
        </li>
        <li>
          Permitted to marry another if spouse is dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 7:2">Romans 7:2</span> ,
              <span class="modal-verse" id="1 Corinthians 7:39">1 Corinthians 7:39</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> (context of widows)
            </li>
          </ul>
        </li>
        <li>
          If the latter husband divorces her or dies; the former husband cannot remarry her
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:3-4">Deuteronomy 24:3-4</span> ,
              <span class="modal-verse" id="Jeremiah 3:1">Jeremiah 3:1</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Child Rearing</span>
      <ul class="styled">
        <li>
          Fathers rule over their children (leadership)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 18:19">Genesis 18:19</span> ,
              <span class="modal-verse" id="1 Timothy 3:4-5">1 Timothy 3:4-5</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span>
          </ul>
        </li>
        <li>
          Train/teach/admonish/advise/command/nurture your children and grandchildren to obey the Bible
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 18:19">Genesis 18:19</span> ,
              <span class="modal-verse" id="Deuteronomy 4:9-10">Deuteronomy 4:9-10</span> ,
              <span class="modal-verse" id="Deuteronomy 6:7">6:7</span> ,
              <span class="modal-verse" id="Deuteronomy 11:19-20">11:19-20</span> ,
              <span class="modal-verse" id="Proverbs 10:1">Proverbs 10:1</span> ,
              <span class="modal-verse" id="Proverbs 15:20">15:20</span> ,
              <span class="modal-verse" id="Proverbs 17:21">17:21</span> ,
              <span class="modal-verse" id="Proverbs 17:25">17:25</span> ,
              <span class="modal-verse" id="Proverbs 19:13">19:13</span> ,
              <span class="modal-verse" id="Proverbs 22:6">22:6</span> ,
              <span class="modal-verse" id="Proverbs 23:24">23:24</span> ,
              <span class="modal-verse" id="Proverbs 29:15">29:15</span> ,
              <span class="modal-verse" id="Proverbs 29:17">29:17</span> ,
              <span class="modal-verse" id="Ephesians 6:4">Ephesians 6:4</span>
          </ul>
        </li>
        <li>
          Thou shalt beat him with the rod (Spanking)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:24">Proverbs 13:24</span> ,
              <span class="modal-verse" id="Proverbs 19:18">19:18</span> ,
              <span class="modal-verse" id="Proverbs 22:15">22:15</span> ,
              <span class="modal-verse" id="Proverbs 23:13-14">23:13-14</span> ,
              <span class="modal-verse" id="Proverbs 29:15">29:15</span> ,
              <span class="modal-verse" id="Ecclesiastes 8:11">Ecclesiastes 8:11</span>
          </ul>
        </li>
        <li>
          Fathers, provoke not your children to anger/wrath (don’t provoke them)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 6:4">Ephesians 6:4</span> ,
              <span class="modal-verse" id="Colossians 3:21">Colossians 3:21</span>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="fear">FEAR</h3>
  <ol>
    <li>
      <span class="main-li">Fear God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:21">Exodus 23:21</span> ,
          <span class="modal-verse" id="Leviticus 19:14">Leviticus 19:14</span> ,
          <span class="modal-verse" id="Leviticus 19:32">19:32</span> ,
          <span class="modal-verse" id="Leviticus 25:36">25:36</span> ,
          <span class="modal-verse" id="Deuteronomy 5:29">Deuteronomy 5:29</span> ,
          <span class="modal-verse" id="Deuteronomy 6:13">6:13</span> ,
          <span class="modal-verse" id="Deuteronomy 6:24">6:24</span> ,
          <span class="modal-verse" id="Deuteronomy 8:6">8:6</span> ,
          <span class="modal-verse" id="Deuteronomy 10:12">10:12</span> ,
          <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
          <span class="modal-verse" id="Deuteronomy 13:4">13:4</span> ,
          <span class="modal-verse" id="Joshua 24:14">Joshua 24:14</span> ,
          <span class="modal-verse" id="1 Samuel 12:24">1 Samuel 12:24</span> ,
          <span class="modal-verse" id="2 Kings 17:36">2 Kings 17:36</span> ,
          <span class="modal-verse" id="2 Kings 17:39">17:39</span> ,
          <span class="modal-verse" id="1 Chronicles 16:30">1 Chronicles 16:30</span> ,
          <span class="modal-verse" id="Job 40:3-5">Job 40:3-5</span> ,
          <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
          <span class="modal-verse" id="Psalm 22:23">22:23</span> ,
          <span class="modal-verse" id="Psalm 33:8">33:8</span> ,
          <span class="modal-verse" id="Psalm 34:9">34:9</span> ,
          <span class="modal-verse" id="Psalm 76:7">76:7</span> ,
          <span class="modal-verse" id="Psalm 76:11">76:11</span> ,
          <span class="modal-verse" id="Psalm 85:11">85:11</span> ,
          <span class="modal-verse" id="Psalm 89:7">89:7</span> ,
          <span class="modal-verse" id="Psalm 90:11-12">90:11-12</span> ,
          <span class="modal-verse" id="Psalm 96:9">96:9</span> ,
          <span class="modal-verse" id="Psalm 119:120">119:120</span> ,
          <span class="modal-verse" id="Psalm 130:3-4">130:3-4</span> ,
          <span class="modal-verse" id="Proverbs 1:7">Proverbs 1:7</span> ,
          <span class="modal-verse" id="Proverbs 3:7">3:7</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 10:27">10:27</span> ,
          <span class="modal-verse" id="Proverbs 13:13">13:13</span> ,
          <span class="modal-verse" id="Proverbs 14:16">14:16</span> ,
          <span class="modal-verse" id="Proverbs 14:26-27">14:26-27</span> ,
          <span class="modal-verse" id="Proverbs 15:16">15:16</span> ,
          <span class="modal-verse" id="Proverbs 15:33">15:33</span> ,
          <span class="modal-verse" id="Proverbs 16:6">16:6</span> ,
          <span class="modal-verse" id="Proverbs 19:23">19:23</span> ,
          <span class="modal-verse" id="Proverbs 22:4">22:4</span> ,
          <span class="modal-verse" id="Proverbs 23:17">23:17</span> ,
          <span class="modal-verse" id="Proverbs 24:21">24:21</span> ,
          <span class="modal-verse" id="Proverbs 28:14">28:14</span> ,
          <span class="modal-verse" id="Ecclesiastes 12:13">Ecclesiastes 12:13</span> ,
          <span class="modal-verse" id="Isaiah 8:13">Isaiah 8:13</span> ,
          <span class="modal-verse" id="Isaiah 11:2">Isaiah 11:2</span> ,
          <span class="modal-verse" id="Malachi 1:14">Malachi 1:14</span> ,
          <span class="modal-verse" id="Matthew 10:28">Matthew 10:28</span> ,
          <span class="modal-verse" id="Luke 12:5">Luke 12:5</span> ,
          <span class="modal-verse" id="Romans 11:20">Romans 11:20</span> ,
          <span class="modal-verse" id="2 Corinthians 7:1">2 Corinthians 7:1</span> ,
          <span class="modal-verse" id="Philippians 2:12">Philippians 2:12</span> ,
          <span class="modal-verse" id="Colossians 3:22">Colossians 3:22</span> ,
          <span class="modal-verse" id="Hebrews 4:1">Hebrews 4:1</span> ,
          <span class="modal-verse" id="Hebrews 12:28">12:28</span> ,
          <span class="modal-verse" id="1 Peter 1:17">1 Peter 1:17</span> ,
          <span class="modal-verse" id="1 Peter 2:17">2:17</span> ,
          <span class="modal-verse" id="Revelation 14:7">Revelation 14:7</span>
          <ul class="sub">
            <li>
              Note: With Trembling
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
                  <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
                  <span class="modal-verse" id="Philippians 2:12">Philippians 2:12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear your parents</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:3">Leviticus 19:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear the government when you do evil</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 20:2">Proverbs 20:2</span> ,
          <span class="modal-verse" id="Proverbs 24:21">24:21</span> ,
          <span class="modal-verse" id="Romans 13:4">Romans 13:4</span> ,
          <span class="modal-verse" id="Romans 13:7">13:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear your masters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Malachi 1:6">Malachi 1:6</span> ,
          <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
          <span class="modal-verse" id="1 Peter 2:18">1 Peter 2:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear not (everything/everyone else)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 15:1">Genesis 15:1</span> ,
          <span class="modal-verse" id="Genesis 26:24">26:24</span> ,
          <span class="modal-verse" id="Deuteronomy 31:6">Deuteronomy 31:6</span> ,
          <span class="modal-verse" id="Deuteronomy 31:8">31:8</span> ,
          <span class="modal-verse" id="Joshua 1:9">Joshua 1:9</span> ,
          <span class="modal-verse" id="Joshua 8:1">8:1</span> ,
          <span class="modal-verse" id="Joshua 10:8">10:8</span> ,
          <span class="modal-verse" id="1 Samuel 12:20">1 Samuel 12:20</span> ,
          <span class="modal-verse" id="1 Chronicles 22:13">1 Chronicles 22:13</span> ,
          <span class="modal-verse" id="1 Chronicles 28:20">28:20</span> ,
          <span class="modal-verse" id="2 Chronicles 20:15">2 Chronicles 20:15</span> ,
          <span class="modal-verse" id="2 Chronicles 20:17">20:17</span> ,
          <span class="modal-verse" id="Job 31:34">Job 31:34</span> ,
          <span class="modal-verse" id="Psalm 37:1">Psalm 37:1</span> ,
          <span class="modal-verse" id="Psalm 37:7">37:7</span> ,
          <span class="modal-verse" id="Psalm 49:16">49:16</span> ,
          <span class="modal-verse" id="Proverbs 3:25-26">Proverbs 3:25-26</span> ,
          <span class="modal-verse" id="Proverbs 24:19">24:19</span> ,
          <span class="modal-verse" id="Proverbs 29:25">29:25</span> ,
          <span class="modal-verse" id="Isaiah 35:4">Isaiah 35:4</span> ,
          <span class="modal-verse" id="Isaiah 41:10">41:10</span> ,
          <span class="modal-verse" id="Isaiah 41:14">41:14</span> ,
          <span class="modal-verse" id="Isaiah 43:1">43:1</span> ,
          <span class="modal-verse" id="Isaiah 43:5">43:5</span> ,
          <span class="modal-verse" id="Isaiah 44:2">44:2</span> ,
          <span class="modal-verse" id="Isaiah 51:7">51:7</span> ,
          <span class="modal-verse" id="Jeremiah 1:8">Jeremiah 1:8</span> ,
          <span class="modal-verse" id="Jeremiah 1:17">1:17</span> ,
          <span class="modal-verse" id="Lamentations 3:57">Lamentations 3:57</span> ,
          <span class="modal-verse" id="Ezekiel 2:6">Ezekiel 2:6</span> ,
          <span class="modal-verse" id="Ezekiel 3:9">3:9</span> ,
          <span class="modal-verse" id="Zephaniah 3:16">Zephaniah 3:16</span> ,
          <span class="modal-verse" id="Haggai 2:5">Haggai 2:5</span> ,
          <span class="modal-verse" id="Zechariah 8:13">Zechariah 8:13</span> ,
          <span class="modal-verse" id="Matthew 10:26">Matthew 10:26</span> ,
          <span class="modal-verse" id="Matthew 10:28">10:28</span> ,
          <span class="modal-verse" id="Matthew 10:31">10:31</span> ,
          <span class="modal-verse" id="Luke 5:10">Luke 5:10</span> ,
          <span class="modal-verse" id="Luke 12:4">12:4</span> ,
          <span class="modal-verse" id="Luke 12:7">12:7</span> ,
          <span class="modal-verse" id="Luke 12:32">12:32</span> ,
          <span class="modal-verse" id="Luke 21:9">21:9</span> ,
          <span class="modal-verse" id="John 14:1">John 14:1</span> ,
          <span class="modal-verse" id="John 14:27">14:27</span> ,
          <span class="modal-verse" id="Philippians 1:28">Philippians 1:28</span> ,
          <span class="modal-verse" id="2 Timothy 1:7">2 Timothy 1:7</span> ,
          <span class="modal-verse" id="Hebrews 13:6">Hebrews 13:6</span> ,
          <span class="modal-verse" id="1 Peter 3:14">1 Peter 3:14</span> ,
          <span class="modal-verse" id="Revelation 1:17">Revelation 1:17</span> ,
          <span class="modal-verse" id="Revelation 2:10">2:10</span>
          <ul class="sub">
            <li>
              to obey god
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Genesis 46:3">Genesis 46:3</span> ,
                  <span class="modal-verse" id="Deuteronomy 31:6">Deuteronomy 31:6</span> ,
                  <span class="modal-verse" id="Deuteronomy 31:8">31:8</span> ,
                  <span class="modal-verse" id="Joshua 1:9">Joshua 1:9</span> ,
                  <span class="modal-verse" id="1 Chronicles 22:13">1 Chronicles 22:13</span> ,
                  <span class="modal-verse" id="Isaiah 40:9">Isaiah 40:9</span> ,
                  <span class="modal-verse" id="Luke 5:10">Luke 5:10</span> ,
                  <span class="modal-verse" id="Luke 12:32">12:32</span> ,
                  <span class="modal-verse" id="2 Timothy 1:7">2 Timothy 1:7</span> ,
                  <span class="modal-verse" id="1 Peter 3:6">1 Peter 3:6</span>
                </li>
              </ul>
            </li>
            <li>
              examples of in god's presence
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 20:20">Exodus 20:20</span> ,
                  <span class="modal-verse" id="Judges 6:23">Judges 6:23</span> ,
                  <span class="modal-verse" id="Matthew 17:7">Matthew 17:7</span> ,
                  <span class="modal-verse" id="Matthew 28:10">28:10</span> ,
                  <span class="modal-verse" id="Revelation 1:17">Revelation 1:17</span>
                </li>
              </ul>
            </li>
            <li>
              persecution
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="2 Kings 1:15">2 Kings 1:15</span> ,
                  <span class="modal-verse" id="2 Kings 6:16">6:16</span> ,
                  <span class="modal-verse" id="Isaiah 44:8">Isaiah 44:8</span> ,
                  <span class="modal-verse" id="Isaiah 51:7">51:7</span> ,
                  <span class="modal-verse" id="Jeremiah 1:8">Jeremiah 1:8</span> ,
                  <span class="modal-verse" id="Jeremiah 1:17">1:17</span> ,
                  <span class="modal-verse" id="Ezekiel 2:6">Ezekiel 2:6</span> ,
                  <span class="modal-verse" id="Ezekiel 3:9">3:9</span> ,
                  <span class="modal-verse" id="Matthew 10:26">Matthew 10:26</span> ,
                  <span class="modal-verse" id="Matthew 10:28">10:28</span> ,
                  <span class="modal-verse" id="Matthew 10:31">10:31</span> ,
                  <span class="modal-verse" id="Luke 12:4">Luke 12:4</span> ,
                  <span class="modal-verse" id="Luke 12:7">12:7</span> ,
                  <span class="modal-verse" id="Philippians 1:28">Philippians 1:28</span> ,
                  <span class="modal-verse" id="1 Peter 3:14">1 Peter 3:14</span> ,
                  <span class="modal-verse" id="Revelation 2:10">Revelation 2:10</span>
                </li>
              </ul>
            </li>
            <li>
              Ye shall not be afraid of the face of man (as a judge)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span>
                </li>
              </ul>
            </li>
            <li>
              Thou shalt not be afraid of him (the false prophet)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 18:22">Deuteronomy 18:22</span>
                </li>
              </ul>
            </li>
            <li>
              Note: people fear because of uncertainty about God’s promises (opposite of faith)
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have courage</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 31:6-7">Deuteronomy 31:6-7</span> ,
          <span class="modal-verse" id="Deuteronomy 31:23">31:23</span> ,
          <span class="modal-verse" id="Joshua 1:6-7">Joshua 1:6-7</span> ,
          <span class="modal-verse" id="Joshua 1:9">1:9</span> ,
          <span class="modal-verse" id="Joshua 23:6">23:6</span> ,
          <span class="modal-verse" id="2 Chronicles 32:7">2 Chronicles 32:7</span> ,
          <span class="modal-verse" id="Psalm 31:24">Psalm 31:24</span> ,
          <span class="modal-verse" id="Isaiah 35:3-4">Isaiah 35:3-4</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="fornication">FORNICATION</h3>
  <ol>
    <li>
      <span class="main-li">A man must marry a maid (virgin) that he lies with (unless the father rejects him)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 22:16">Exodus 22:16</span> ,
          <span class="modal-verse" id="Deuteronomy 22:28-29">Deuteronomy 22:28-29</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="friends">FRIENDS</h3>
  <ol>
    <li>
      <span class="main-li">Don’t forsake your friends</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Being_A_Friend.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: being a friend</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 18:24">Proverbs 18:24</span> ,
          <span class="modal-verse" id="Proverbs 27:10">27:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t be friends/companions with… </span>
      <ul class="styled">
        <li>
          An angry man
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 22:24">Proverbs 22:24</span>
            </li>
          </ul>
        <li>
          A glutton/drunkard
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 23:20-21">Proverbs 23:20-21</span> ,
              <span class="modal-verse" id="Proverbs 28:7">28:7</span>
            </li>
          </ul>
        </li>
        <li>
          A flatterer
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 20:19">Proverbs 20:19</span>
            </li>
          </ul>
        </li>
        <li>
          Unbelievers
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Corinthians 6:14-18">2 Corinthians 6:14-18</span>
            </li>
          </ul>
        </li>
        <li>
          Evil men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 1:15">Proverbs 1:15</span> ,
              <span class="modal-verse" id="Proverbs 24:1">24:1</span> ,
              <span class="modal-verse" id="2 Timothy 3:5">2 Timothy 3:5</span>
            </li>
          </ul>
        </li>
        <li>
          Scorners
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 22:10">Proverbs 22:10</span>
            </li>
          </ul>
        </li>
        <li>
          Those given to change
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:21">Proverbs 24:21</span>
            </li>
          </ul>
        </li>
        <li>
          Foolish men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:20">Proverbs 13:20</span> ,
              <span class="modal-verse" id="Proverbs 14:7">14:7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be friends/companions with…</span>
      <ul class="styled">
        <li>
          Those that fear God/Wise men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 119:63">Psalm 119:63</span> ,
              <span class="modal-verse" id="Proverbs 13:20">Proverbs 13:20</span> ,
              <span class="modal-verse" id="Proverbs 15:12">15:12</span> ,
              <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="gender">GENDER</h3>
  <ol>
    <li>
      <span class="main-li">Sin of effeminacy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 kings 2:2">1 kings 2:2</span> ,
          <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">16:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Women should be soft spoken</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/A_Biblical_View_Of_Womanhood.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: a biblical view of womanhood</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 7:11">Proverbs 7:11</span> ,
          <span class="modal-verse" id="Proverbs 9:13">9:13</span> ,
          <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
          <span class="modal-verse" id="1 Peter 3:4">1 Peter 3:4</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="good-manners">GOOD MANNERS</h3>
  <ol>
    <li>
      <span class="main-li">Have Salt (savor)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 9:50">Mark 9:50</span> ,
          <span class="modal-verse" id="Colossians 4:6">Colossians 4:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be Courteous</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Greet/Salute others (especially by name)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 2:12">Psalm 2:12</span> ,
          <span class="modal-verse" id="Matthew 10:12">Matthew 10:12</span> ,
          <span class="modal-verse" id="Luke 10:5">Luke 10:5</span> ,
          <span class="modal-verse" id="1 Corinthians 16:20">1 Corinthians 16:20</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:26">1 Thessalonians 5:26</span> ,
          <span class="modal-verse" id="Philippians 4:21">Philippians 4:21</span> ,
          <span class="modal-verse" id="Hebrews 13:24">Hebrews 13:24</span> ,
          <span class="modal-verse" id="3 John 1:14">3 John 1:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Stand up when an elderly man walks in</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:32">Leviticus 19:32</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t be cruel to the disabled</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:14">Leviticus 19:14</span> ,
          <span class="modal-verse" id="Deuteronomy 27:18">Deuteronomy 27:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Help those in need</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:5">Exodus 23:5</span> ,
          <span class="modal-verse" id="Deuteronomy 22:4">Deuteronomy 22:4</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Visit the sick</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 25:36">Matthew 25:36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Visit them in prison</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 25:36">Matthew 25:36</span> ,
          <span class="modal-verse" id="Hebrews 13:3">Hebrews 13:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t abuse hospitality</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 25:17">Proverbs 25:17</span> ,
          <span class="modal-verse" id="Matthew 10:11">Matthew 10:11</span> ,
          <span class="modal-verse" id="Mark 6:10">Mark 6:10</span> ,
          <span class="modal-verse" id="Luke 9:4">Luke 9:4</span> ,
          <span class="modal-verse" id="Luke 10:7">10:7</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="gratitude">GRATITUDE</h3>
  <ol>
    <li>
      <span class="main-li">In everything give thanks</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Being_Thankful.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: being thankful</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Chronicles 16:8">1 Chronicles 16:8</span> ,
          <span class="modal-verse" id="1 Chronicles 16:34">16:34</span> ,
          <span class="modal-verse" id="Psalm 30:4">Psalm 30:4</span> ,
          <span class="modal-verse" id="Psalm 50:14">50:14</span> ,
          <span class="modal-verse" id="Psalm 95:2">95:2</span> ,
          <span class="modal-verse" id="Psalm 97:12">97:12</span> ,
          <span class="modal-verse" id="Psalm 100:4">100:4</span> ,
          <span class="modal-verse" id="Psalm 105:1">105:1</span> ,
          <span class="modal-verse" id="Psalm 107:1">107:1</span> ,
          <span class="modal-verse" id="Psalm 136:1-3">136:1-3</span> ,
          <span class="modal-verse" id="Psalm 136:26">26</span> ,
          <span class="modal-verse" id="Psalm 147:7">147:7</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:18">1 Thessalonians 5:18</span> ,
          <span class="modal-verse" id="Ephesians 5:4">Ephesians 5:4</span> ,
          <span class="modal-verse" id="Ephesians 5:20">5:20</span> ,
          <span class="modal-verse" id="Colossians 2:7">Colossians 2:7</span> ,
          <span class="modal-verse" id="Colossians 3:15">3:15</span> ,
          <span class="modal-verse" id="Colossians 3:17">3:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t complain, murmur or be ungrateful</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 11:1">Numbers 11:1</span> ,
          <span class="modal-verse" id="John 6:43">John 6:43</span> ,
          <span class="modal-verse" id="1 Corinthians 10:10">1 Corinthians 10:10</span> ,
          <span class="modal-verse" id="Philippians 2:14">Philippians 2:14</span> ,
          <span class="modal-verse" id="Ephesians 4:31">Ephesians 4:31</span>
        </li>
        <li>
          clamor-loud outcry; expression of discontent or protest
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="housing">HOUSING</h3>
  <ol>
    <li>
      <span class="main-li">And thou shalt write them upon the posts of thy house, and on thy gates (Display God’s Word throughout your house)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:9">Deuteronomy 6:9</span> ,
          <span class="modal-verse" id="Deuteronomy 11:20">11:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Build a battlement on your roof when constructing a house</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 22:8">Deuteronomy 22:8</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="humility-honor">HUMILITY/HONOR</h3>
  <ol>
    <li>
      <span class="main-li">Be humble (when you soberly esteem yourself low and another high)(pride is a sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:34">Proverbs 3:34</span> ,
          <span class="modal-verse" id="Proverbs 6:17">6:17</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 11:2">11:2</span> ,
          <span class="modal-verse" id="Proverbs 12:9">12:9</span> ,
          <span class="modal-verse" id="Proverbs 13:10">13:10</span> ,
          <span class="modal-verse" id="Proverbs 15:25">15:25</span> ,
          <span class="modal-verse" id="Proverbs 15:33">15:33</span> ,
          <span class="modal-verse" id="Proverbs 16:5">16:5</span> ,
          <span class="modal-verse" id="Proverbs 16:18-19">16:18-19</span> ,
          <span class="modal-verse" id="Proverbs 17:19">17:19</span> ,
          <span class="modal-verse" id="Proverbs 18:11-12">18:11-12</span> ,
          <span class="modal-verse" id="Proverbs 21:4">21:4</span> ,
          <span class="modal-verse" id="Proverbs 22:4">22:4</span> ,
          <span class="modal-verse" id="Proverbs 28:25">28:25</span> ,
          <span class="modal-verse" id="Proverbs 29:23">29:23</span> ,
          <span class="modal-verse" id="Proverbs 30:13">30:13</span> ,
          <span class="modal-verse" id="Isaiah 66:2">Isaiah 66:2</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
          <span class="modal-verse" id="Romans 11:20">Romans 11:20</span> ,
          <span class="modal-verse" id="Romans 12:3">12:3</span> ,
          <span class="modal-verse" id="Romans 12:16">12:16</span> ,
          <span class="modal-verse" id="1 Corinthians 1:26-29">1 Corinthians 1:26-29</span> ,
          <span class="modal-verse" id="1 Corinthians 4:6">4:6</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span> ,
          <span class="modal-verse" id="Philippians 2:5">2:5</span> ,
          <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
          <span class="modal-verse" id="James 4:6">James 4:6</span> ,
          <span class="modal-verse" id="James 4:10">4:10</span> ,
          <span class="modal-verse" id="1 Peter 5:5-6">1 Peter 5:5-6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be meek</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Zephaniah 2:3">Zephaniah 2:3</span> ,
          <span class="modal-verse" id="Galatians 5:23">Galatians 5:23</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
          <span class="modal-verse" id="1 Timothy 6:11">1 Timothy 6:11</span> ,
          <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
          <span class="modal-verse" id="1 Peter 3:4">1 Peter 3:4</span> ,
          <span class="modal-verse" id="1 Peter 3:15">3:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Choose the lowest seat</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 25:6-7">Proverbs 25:6-7</span> ,
          <span class="modal-verse" id="Matthew 23:6">Matthew 23:6</span> ,
          <span class="modal-verse" id="Mark 12:39">Mark 12:39</span> ,
          <span class="modal-verse" id="Luke 11:43">Luke 11:43</span> ,
          <span class="modal-verse" id="Luke 14:8">14:8</span> ,
          <span class="modal-verse" id="Luke 14:10">14:10</span> ,
          <span class="modal-verse" id="Luke 20:46">20:46</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Say we are unprofitable servants (God isn’t bettered by us- only we and the people around us are profited: stay humble)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 17:10">Luke 17:10</span>
        </li>
      </ul>
    </li>
    <li>
      Honor, reverence, esteem highly
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Being_Respectful.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: being respectful</span>
        </div>
      </a>
      <ul class="styled">

        <li>
          <span class="main-li">Husband to wife</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Peter 3:7">1 Peter 3:7</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Wife to husband</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 5:33">Ephesians 5:33</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Children to parents</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:12">Exodus 20:12</span> ,
              <span class="modal-verse" id="Deuteronomy 5:16">Deuteronomy 5:16</span> ,
              <span class="modal-verse" id="Deuteronomy 27:16">27:16</span> ,
              <span class="modal-verse" id="Proverbs 30:17">Proverbs 30:17</span> ,
              <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
              <span class="modal-verse" id="Matthew 15:4">Matthew 15:4</span> ,
              <span class="modal-verse" id="Matthew 19:19">19:19</span> ,
              <span class="modal-verse" id="Mark 7:10">Mark 7:10</span> ,
              <span class="modal-verse" id="Mark 10:19">10:19</span> ,
              <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
              <span class="modal-verse" id="Ephesians 6:2">Ephesians 6:2</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Servant to master</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Malachi 1:6">Malachi 1:6</span> ,
              <span class="modal-verse" id="1 Timothy 6:1">1 Timothy 6:1</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Citizens to the king</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 13:7">Romans 13:7</span> ,
              <span class="modal-verse" id="1 Peter 2:17">1 Peter 2:17</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Believers to spiritual leader</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Philippians 2:29">Philippians 2:29</span> ,
              <span class="modal-verse" id="1 Corinthians 4:1">1 Corinthians 4:1</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:12-13">1 Thessalonians 5:12-13</span> ,
              <span class="modal-verse" id="1 Timothy 5:17">1 Timothy 5:17</span> ,
              <span class="modal-verse" id="Hebrews 13:7">Hebrews 13:7</span> ,
              <span class="modal-verse" id="1 Timothy 4:12">1 Timothy 4:12</span> ,
              <span class="modal-verse" id="Titus 2:15">Titus 2:15</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Other believers (in general)</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 12:10">Romans 12:10</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Elderly</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:32">Leviticus 19:32</span> ,
              <span class="modal-verse" id="1 Timothy 5:3">1 Timothy 5:3</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">All men (equal value as a person)</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
              <span class="modal-verse" id="1 Peter 2:17">1 Peter 2:17</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Worship the Lord</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Kings 17:36">2 Kings 17:36</span> ,
              <span class="modal-verse" id="Psalm 4:4">Psalm 4:4</span> ,
              <span class="modal-verse" id="Psalm 45:11">45:11</span> ,
              <span class="modal-verse" id="Psalm 96:9">96:9</span> ,
              <span class="modal-verse" id="Matthew 4:10">Matthew 4:10</span> ,
              <span class="modal-verse" id="Luke 4:8">Luke 4:8</span> ,
              <span class="modal-verse" id="Hebrews 12:28">Hebrews 12:28</span> ,
              <span class="modal-verse" id="Revelation 14:7">Revelation 14:7</span> ,
              <span class="modal-verse" id="Revelation 19:10">Revelation 19:10</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Sanctify the Lord</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Isaiah 8:13">Isaiah 8:13</span> ,
              <span class="modal-verse" id="1 Peter 3:15">1 Peter 3:15</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="joy">JOY</h3>
  <ol>
    <li>
      <span class="main-li">Rejoice in the Lord (always/evermore)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Chronicles 16:10">1 Chronicles 16:10</span> ,
          <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
          <span class="modal-verse" id="Psalm 5:11">5:11</span> ,
          <span class="modal-verse" id="Psalm 32:11">32:11</span> ,
          <span class="modal-verse" id="Psalm 33:1">33:1</span> ,
          <span class="modal-verse" id="Psalm 37:4">37:4</span> ,
          <span class="modal-verse" id="Psalm 40:16">40:16</span> ,
          <span class="modal-verse" id="Psalm 48:11">48:11</span> ,
          <span class="modal-verse" id="Psalm 67:4">67:4</span> ,
          <span class="modal-verse" id="Psalm 68:3-4">68:3-4</span> ,
          <span class="modal-verse" id="Psalm 70:4">70:4</span> ,
          <span class="modal-verse" id="Psalm 97:12">97:12</span> ,
          <span class="modal-verse" id="Psalm 118:15">118:15</span> ,
          <span class="modal-verse" id="Psalm 149:2">149:2</span> ,
          <span class="modal-verse" id="Psalm 149:5">149:5</span> ,
          <span class="modal-verse" id="Proverbs 15:13">Proverbs 15:13</span> ,
          <span class="modal-verse" id="Proverbs 15:15">15:15</span> ,
          <span class="modal-verse" id="Proverbs 17:22">17:22</span> ,
          <span class="modal-verse" id="Ecclesiastes 9:7">Ecclesiastes 9:7</span> ,
          <span class="modal-verse" id="Isaiah 65:18">Isaiah 65:18</span> ,
          <span class="modal-verse" id="Isaiah 66:10">66:10</span> ,
          <span class="modal-verse" id="Joel 2:23">Joel 2:23</span> ,
          <span class="modal-verse" id="Zephaniah 3:14">Zephaniah 3:14</span> ,
          <span class="modal-verse" id="Zechariah 2:10">Zechariah 2:10</span> ,
          <span class="modal-verse" id="Zechariah 9:9">9:9</span> ,
          <span class="modal-verse" id="Romans 12:8">Romans 12:8</span> ,
          <span class="modal-verse" id="1 Corinthians 13:6">1 Corinthians 13:6</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Philippians 3:1">Philippians 3:1</span> ,
          <span class="modal-verse" id="Philippians 4:4">4:4</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:16">1 Thessalonians 5:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">For your Salvation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 10:20">Luke 10:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">For rewards/blessings</span>
      <ul class="styled">
        <li>
          When tempted (tested to sin)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:2">James 1:2</span>
            </li>
          </ul>
        </li>
        <li>
          When persecuted for Christ’s sake
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:12">Matthew 5:12</span> ,
              <span class="modal-verse" id="Luke 6:23">Luke 6:23</span> ,
              <span class="modal-verse" id="John 16:33">John 16:33</span> ,
              <span class="modal-verse" id="Romans 12:12">Romans 12:12</span> ,
              <span class="modal-verse" id="1 Peter 3:14">1 Peter 3:14</span> ,
              <span class="modal-verse" id="1 Peter 4:12-13">4:12-13</span> ,
              <span class="modal-verse" id="1 Peter 4:16">4:16</span>
            </li>
          </ul>
        </li>
        <li>
          When exalted/made low
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ecclesiastes 7:14">Ecclesiastes 7:14</span> ,
              <span class="modal-verse" id="James 1:9-10">James 1:9-10</span>
            </li>
          </ul>
        </li>
        <li>
          For hope of reward
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 31:16">Jeremiah 31:16</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Rejoice not; sorrow; mourn (because of sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Jeremiah 6:26">Jeremiah 6:26</span> ,
          <span class="modal-verse" id="Hosea 9:1">Hosea 9:1</span> ,
          <span class="modal-verse" id="Joel 1:5">Joel 1:5</span> ,
          <span class="modal-verse" id="Joel 1:11">1:11</span> ,
          <span class="modal-verse" id="Joel 1:13">1:13</span> ,
          <span class="modal-verse" id="Joel 2:12-13">2:12-13</span> ,
          <span class="modal-verse" id="James 4:9">James 4:9</span> ,
          <span class="modal-verse" id="James 4:16">4:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be happy for others (when good things happen) or sad (when bad)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Job 6:14">Job 6:14</span> ,
          <span class="modal-verse" id="Proverbs 17:5">Proverbs 17:5</span> ,
          <span class="modal-verse" id="Romans 12:15">Romans 12:15</span> ,
          <span class="modal-verse" id="Hebrews 13:3">Hebrews 13:3</span> ,
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="justice-equity-civil-moral">JUSTICE AND EQUITY (CIVIL & MORAL)</h3>
  <ol>
    <li>
      <span class="main-li">Judge righteous judgement</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:7">Exodus 23:7</span> ,
          <span class="modal-verse" id="Leviticus 19:15">Leviticus 19:15</span> ,
          <span class="modal-verse" id="Leviticus 19:35">19:35</span> ,
          <span class="modal-verse" id="Deuteronomy 1:16">Deuteronomy 1:16</span> ,
          <span class="modal-verse" id="Deuteronomy 16:18-20">16:18-20</span> ,
          <span class="modal-verse" id="Deuteronomy 24:17">24:17</span> ,
          <span class="modal-verse" id="Deuteronomy 25:1">25:1</span> ,
          <span class="modal-verse" id="Deuteronomy 27:19">27:19</span> ,
          <span class="modal-verse" id="Proverbs 17:15">Proverbs 17:15</span> ,
          <span class="modal-verse" id="Proverbs 17:26">17:26</span> ,
          <span class="modal-verse" id="Proverbs 18:5">18:5</span> ,
          <span class="modal-verse" id="Proverbs 29:4">29:4</span> ,
          <span class="modal-verse" id="Proverbs 31:8-9">31:8-9</span> ,
          <span class="modal-verse" id="Jeremiah 7:5-6">Jeremiah 7:5-6</span> ,
          <span class="modal-verse" id="Jeremiah 22:3">22:3</span> ,
          <span class="modal-verse" id="Ezekiel 18:8">Ezekiel 18:8</span> ,
          <span class="modal-verse" id="Ezekiel 45:9">45:9</span> ,
          <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Zechariah 8:16">Zechariah 8:16</span> ,
          <span class="modal-verse" id="John 7:24">John 7:24</span> ,
          <span class="modal-verse" id="Titus 1:8">Titus 1:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not respect persons (equality) (poor/ mighty/ rich/ stranger)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span> ,
          <span class="modal-verse" id="Deuteronomy 16:19">16:19</span> ,
          <span class="modal-verse" id="Proverbs 18:5">Proverbs 18:5</span> ,
          <span class="modal-verse" id="Proverbs 24:23">24:23</span> ,
          <span class="modal-verse" id="Proverbs 28:21">28:21</span> ,
          <span class="modal-verse" id="Ephesians 6:9">Ephesians 6:9</span> ,
          <span class="modal-verse" id="Colossians 4:1">Colossians 4:1</span> ,
          <span class="modal-verse" id="1 Timothy 5:21">1 Timothy 5:21</span> ,
          <span class="modal-verse" id="James 2:1">James 2:1</span> ,
          <span class="modal-verse" id="James 2:9">2:9</span>
          <ul class="sub">
            <li>
              Poor/Rich
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 23:3">Exodus 23:3</span> ,
                  <span class="modal-verse" id="Leviticus 19:15">Leviticus 19:15</span> ,
                  <span class="modal-verse" id="Proverbs 29:7">Proverbs 29:7</span> ,
                  <span class="modal-verse" id="Proverbs 29:14">29:14</span> ,
                  <span class="modal-verse" id="Isaiah 10:2">Isaiah 10:2</span> ,
                  <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
                  <span class="modal-verse" id="James 2:2-4">James 2:2-4</span>
                </li>
              </ul>
            </li>
            <li>
              Small/Great
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span> ,
                  <span class="modal-verse" id="Proverbs 17:26">Proverbs 17:26</span>
                </li>
              </ul>
            </li>
            <li>
              Stranger/Brethren (applicable to race/ethnicity)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 12:48-49">Exodus 12:48-49</span> ,
                  <span class="modal-verse" id="Exodus 22:21">22:21</span> ,
                  <span class="modal-verse" id="Exodus 23:9">23:9</span> ,
                  <span class="modal-verse" id="Leviticus 19:33-34">Leviticus 19:33-34</span> ,
                  <span class="modal-verse" id="Leviticus 24:22">24:22</span> ,
                  <span class="modal-verse" id="Numbers 15:15-16">Numbers 15:15-16</span> ,
                  <span class="modal-verse" id="Deuteronomy 27:19">Deuteronomy 27:19</span> ,
                  <span class="modal-verse" id="Jeremiah 7:6">Jeremiah 7:6</span> ,
                  <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
                  <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
                  <span class="modal-verse" id="Malachi 3:5 ">Malachi 3:5 </span>
                </li>
              </ul>
            </li>
            <li>
              Widow/Fatherless
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 22:22">Exodus 22:22</span> ,
                  <span class="modal-verse" id="Deuteronomy 27:19">Deuteronomy 27:19</span> ,
                  <span class="modal-verse" id="Isaiah 1:17">Isaiah 1:17</span> ,
                  <span class="modal-verse" id="Isaiah 10:2">10:2</span> ,
                  <span class="modal-verse" id="Jeremiah 7:6">Jeremiah 7:6</span> ,
                  <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
                  <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
                  <span class="modal-verse" id="Malachi 3:5">Malachi 3:5</span> ,
                  <span class="modal-verse" id="Matthew 23:14">Matthew 23:14</span> ,
                  <span class="modal-verse" id="Mark 12:40">Mark 12:40</span> ,
                  <span class="modal-verse" id="Luke 20:47">Luke 20:47</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t receive bribes (money that corrupts judgment)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:8">Exodus 23:8</span> ,
          <span class="modal-verse" id="Deuteronomy 16:19">Deuteronomy 16:19</span> ,
          <span class="modal-verse" id="Psalm 15:5">Psalm 15:5</span> ,
          <span class="modal-verse" id="Proverbs 15:27">Proverbs 15:27</span> ,
          <span class="modal-verse" id="Proverbs 17:23">17:23</span> ,
          <span class="modal-verse" id="Proverbs 29:4">29:4</span> ,
          <span class="modal-verse" id="Ezekiel 22:12">Ezekiel 22:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Receive not an accusation but before two or three witnesses</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 19:15">Deuteronomy 19:15</span> ,
          <span class="modal-verse" id="Matthew 18:16">Matthew 18:16</span> ,
          <span class="modal-verse" id="2 Corinthians 13:1">2 Corinthians 13:1</span> ,
          <span class="modal-verse" id="1 Timothy 5:19">1 Timothy 5:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">One is punished for his own sin (not for another person’s)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 24:16">Deuteronomy 24:16</span> ,
          <span class="modal-verse" id="2 Kings 14:6">2 Kings 14:6</span> ,
          <span class="modal-verse" id="2 Chronicles 25:4">2 Chronicles 25:4</span> ,
          <span class="modal-verse" id="Ezekiel 18:18-20">Ezekiel 18:18-20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t twist judgment to follow the crowd</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:2">Exodus 23:2</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="love-hate">LOVE & HATE</h3>
  <ol>
    <li>
      <span class="main-li">Love God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:5">Deuteronomy 6:5</span> ,
          <span class="modal-verse" id="Deuteronomy 10:12">10:12</span> ,
          <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
          <span class="modal-verse" id="Deuteronomy 11:1">11:1</span> ,
          <span class="modal-verse" id="Deuteronomy 11:22">11:22</span> ,
          <span class="modal-verse" id="Deuteronomy 30:16">30:16</span> ,
          <span class="modal-verse" id="Deuteronomy 30:20">30:20</span> ,
          <span class="modal-verse" id="Joshua 22:5">Joshua 22:5</span> ,
          <span class="modal-verse" id="Joshua 23:11">23:11</span> ,
          <span class="modal-verse" id="Psalm 17:15">Psalm 17:15</span> ,
          <span class="modal-verse" id="Psalm 18:1">18:1</span> ,
          <span class="modal-verse" id="Psalm 31:23">31:23</span> ,
          <span class="modal-verse" id="Psalm 40:8">40:8</span> ,
          <span class="modal-verse" id="Psalm 42:1-3">42:1-3</span> ,
          <span class="modal-verse" id="Psalm 57:7">57:7</span> ,
          <span class="modal-verse" id="Psalm 63:1-2">63:1-2</span> ,
          <span class="modal-verse" id="Psalm 73:25">73:25</span> ,
          <span class="modal-verse" id="Psalm 89:16">89:16</span> ,
          <span class="modal-verse" id="Psalm 100:2">100:2</span> ,
          <span class="modal-verse" id="Psalm 105:3">105:3</span> ,
          <span class="modal-verse" id="Psalm 143:6">143:6</span> ,
          <span class="modal-verse" id="Proverbs 8:17">Proverbs 8:17</span> ,
          <span class="modal-verse" id="Matthew 22:37-38">Matthew 22:37-38</span> ,
          <span class="modal-verse" id="Mark 12:30">Mark 12:30</span> ,
          <span class="modal-verse" id="Luke 10:27">Luke 10:27</span> ,
          <span class="modal-verse" id="Luke 11:42">11:42</span> ,
          <span class="modal-verse" id="Colossians 3:2">Colossians 3:2</span> ,
          <span class="modal-verse" id="Jude 1:21">Jude 1:21</span>
        </li>
        <li>
          In comparison to loving God: hate father, mother, wife, children, brethren, sisters, and your own life
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 14:26">Luke 14:26</span> ,
              <span class="modal-verse" id="Matthew 10:37">Matthew 10:37</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Love good (righteousness), hate evil (sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 11:5">Psalm 11:5</span> ,
          <span class="modal-verse" id="Psalm 97:10">97:10</span> ,
          <span class="modal-verse" id="Psalm 101:3">101:3</span> ,
          <span class="modal-verse" id="Proverbs 6:18">Proverbs 6:18</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 10:23">10:23</span> ,
          <span class="modal-verse" id="Proverbs 13:5">13:5</span> ,
          <span class="modal-verse" id="Proverbs 14:9">14:9</span> ,
          <span class="modal-verse" id="Proverbs 15:10">15:10</span> ,
          <span class="modal-verse" id="Proverbs 21:10">21:10</span> ,
          <span class="modal-verse" id="Proverbs 21:15">21:15</span> ,
          <span class="modal-verse" id="Proverbs 27:3">27:3</span> ,
          <span class="modal-verse" id="Proverbs 28:16">28:16</span> ,
          <span class="modal-verse" id="Amos 5:14-15">Amos 5:14-15</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Zephaniah 2:3">Zephaniah 2:3</span> ,
          <span class="modal-verse" id="Matthew 5:6">Matthew 5:6</span> ,
          <span class="modal-verse" id="Romans 12:9">Romans 12:9</span> ,
          <span class="modal-verse" id="Ephesians 5:11">Ephesians 5:11</span> ,
          <span class="modal-verse" id="Hebrews 1:9">Hebrews 1:9</span> ,
          <span class="modal-verse" id="3 John 1:11">3 John 1:11</span> ,
          <span class="modal-verse" id="Revelation 3:19">Revelation 3:19</span>
        </li>
        <li>
          Thy law do I love/longing after at all times/stick (cleave) unto them/run/make haste/delay not/ pant for thy word/Lift up your voice for/seek as for hid treasures.
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 1:2">Psalm 1:2</span> ,
              <span class="modal-verse" id="Psalm 40:8">40:8</span> ,
              <span class="modal-verse" id="Psalm 119:16">119:16</span> ,
              <span class="modal-verse" id="Psalm 119:20">119:20</span> ,
              <span class="modal-verse" id="Psalm 119:24">119:24</span> ,
              <span class="modal-verse" id="Psalm 119:31">119:31</span> ,
              <span class="modal-verse" id="Psalm 119:32">119:32</span> ,
              <span class="modal-verse" id="Psalm 119:35">119:35</span> ,
              <span class="modal-verse" id="Psalm 119:40">119:40</span> ,
              <span class="modal-verse" id="Psalm 119:60">119:60</span> ,
              <span class="modal-verse" id="Psalm 119:70">119:70</span> ,
              <span class="modal-verse" id="Psalm 119:72">119:72</span> ,
              <span class="modal-verse" id="Psalm 119:77">119:77</span> ,
              <span class="modal-verse" id="Psalm 119:97">119:97</span> ,
              <span class="modal-verse" id="Psalm 119:103">119:103</span> ,
              <span class="modal-verse" id="Psalm 119:111">119:111</span> ,
              <span class="modal-verse" id="Psalm 119:113">119:113</span> ,
              <span class="modal-verse" id="Psalm 119:131">119:131</span> ,
              <span class="modal-verse" id="Psalm 119:136">119:136</span> ,
              <span class="modal-verse" id="Psalm 119:140">119:140</span> ,
              <span class="modal-verse" id="Psalm 119:143">119:143</span> ,
              <span class="modal-verse" id="Psalm 119:161">119:161</span> ,
              <span class="modal-verse" id="Psalm 119:167">119:167</span> ,
              <span class="modal-verse" id="Psalm 119:174">119:174</span> ,
              <span class="modal-verse" id="Proverbs 1:7">Proverbs 1:7</span> ,
              <span class="modal-verse" id="Proverbs 1:22">1:22</span> ,
              <span class="modal-verse" id="Proverbs 2:1-4">2:1-4</span> ,
              <span class="modal-verse" id="Proverbs 2:10">2:10</span> ,
              <span class="modal-verse" id="Proverbs 3:15">3:15</span> ,
              <span class="modal-verse" id="Proverbs 4:5-8">4:5-8</span> ,
              <span class="modal-verse" id="Proverbs 7:1-4">7:1-4</span> ,
              <span class="modal-verse" id="Proverbs 12:1">12:1</span> ,
              <span class="modal-verse" id="Proverbs 15:21">15:21</span> ,
              <span class="modal-verse" id="Proverbs 18:2">18:2</span> ,
              <span class="modal-verse" id="Ezekiel 22:8">Ezekiel 22:8</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:20">1 Thessalonians 5:20</span> ,
              <span class="modal-verse" id="Hebrews 13:22">Hebrews 13:22</span> ,
              <span class="modal-verse" id="1 Peter 2:2">1 Peter 2:2</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not covet: Be content: Love not the world, neither the things in the world</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:17">Exodus 20:17</span> ,
          <span class="modal-verse" id="Deuteronomy 5:21">Deuteronomy 5:21</span> ,
          <span class="modal-verse" id="Job 31:25">Job 31:25</span> ,
          <span class="modal-verse" id="Proverbs 15:27">Proverbs 15:27</span> ,
          <span class="modal-verse" id="Proverbs 27:20">27:20</span> ,
          <span class="modal-verse" id="Proverbs 28:20">28:20</span> ,
          <span class="modal-verse" id="Proverbs 28:22">28:22</span> ,
          <span class="modal-verse" id="Proverbs 30:8">30:8</span> ,
          <span class="modal-verse" id="Proverbs 30:15-16">30:15-16</span> ,
          <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
          <span class="modal-verse" id="Luke 3:14">Luke 3:14</span> ,
          <span class="modal-verse" id="Luke 12:15">12:15</span> ,
          <span class="modal-verse" id="Romans 7:7">Romans 7:7</span> ,
          <span class="modal-verse" id="Romans 13:9">13:9</span> ,
          <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span> ,
          <span class="modal-verse" id="1 Corinthians 10:6">10:6</span> ,
          <span class="modal-verse" id="Ephesians 5:3">Ephesians 5:3</span> ,
          <span class="modal-verse" id="Philippians 4:11-12">Philippians 4:11-12</span> ,
          <span class="modal-verse" id="Colossians 3:2">Colossians 3:2</span> ,
          <span class="modal-verse" id="Colossians 3:5">3:5</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="1 Timothy 3:8">8:3</span> ,
          <span class="modal-verse" id="1 Timothy 6:5-11">6:5-11</span> ,
          <span class="modal-verse" id="2 Timothy 2:4">2 Timothy 2:4</span> ,
          <span class="modal-verse" id="2 Timothy 2:22">2:22</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span> ,
          <span class="modal-verse" id="Titus 2:12">2:12</span> ,
          <span class="modal-verse" id="Hebrews 13:5">Hebrews 13:5</span> ,
          <span class="modal-verse" id="James 5:1">James 5:1</span> ,
          <span class="modal-verse" id="1 Peter 2:11">1 Peter 2:11</span> ,
          <span class="modal-verse" id="1 Peter 4:2">4:2</span> ,
          <span class="modal-verse" id="1 Peter 5:2">5:2</span> ,
          <span class="modal-verse" id="1 John 2:15-17">1 John 2:15-17</span> ,
          <span class="modal-verse" id="James 4:4">James 4:4</span> ,
          <span class="modal-verse" id="2 Timothy 3:4">2 Timothy 3:4</span> ,
          <span class="modal-verse" id="2 Timothy 4:10">4:10</span>
        <li>
          Envy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 37:1">Psalm 37:1</span> ,
              <span class="modal-verse" id="Proverbs 3:31">Proverbs 3:31</span> ,
              <span class="modal-verse" id="Proverbs 14:30">14:30</span> ,
              <span class="modal-verse" id="Proverbs 23:17">23:17</span> ,
              <span class="modal-verse" id="Proverbs 24:1">24:1</span> ,
              <span class="modal-verse" id="Proverbs 24:19">24:19</span> ,
              <span class="modal-verse" id="Proverbs 27:4">27:4</span> ,
              <span class="modal-verse" id="Romans 1:29">Romans 1:29</span> ,
              <span class="modal-verse" id="Romans 13:13">13:13</span> ,
              <span class="modal-verse" id="1 Corinthians 13:4">1 Corinthians 13:4</span> ,
              <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
              <span class="modal-verse" id="Galatians 5:20-21">Galatians 5:20-21</span> ,
              <span class="modal-verse" id="Galatians 5:26">5:26</span> ,
              <span class="modal-verse" id="1 Peter 2:1">1 Peter 2:1</span>
            </li>
          </ul>
        </li>
        <li>
          Let us not be desirous of vain glory
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 5:26">Galatians 5:26</span> ,
              <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t lust after strange women (for fornication or adultery)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:17">Exodus 20:17</span> ,
              <span class="modal-verse" id="Deuteronomy 5:21">Deuteronomy 5:21</span> ,
              <span class="modal-verse" id="Proverbs 5:19-21">Proverbs 5:19-21</span> ,
              <span class="modal-verse" id="Proverbs 6:25">6:25</span> ,
              <span class="modal-verse" id="Matthew 5:28">Matthew 5:28</span> ,
              <span class="modal-verse" id="Galatians 5:19">Galatians 5:19</span> ,
              <span class="modal-verse" id="Colossians 3:5">Colossians 3:5</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:5">1 Thessalonians 4:5</span>
            </li>
          </ul>
        </li>
        <li>
          Deny self (don’t live for worldly pleasures)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 21:17">Proverbs 21:17</span> ,
              <span class="modal-verse" id="Matthew 16:24">Matthew 16:24</span> ,
              <span class="modal-verse" id="Mark 8:34">Mark 8:34</span> ,
              <span class="modal-verse" id="Luke 9:23">Luke 9:23</span> ,
              <span class="modal-verse" id="Romans 15:1">Romans 15:1</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Love others (everybody except haters of God)(saved/unsaved; physical family/strangers; those that hate you/those that love you)</span>
      <ul class="styled">
        <li>
          Brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:17">Leviticus 19:17</span> ,
              <span class="modal-verse" id="Deuteronomy 23:7">Deuteronomy 23:7</span> ,
              <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
              <span class="modal-verse" id="John 13:14-15">John 13:14-15</span> (example),
              <span class="modal-verse" id="John 13:34-35">13:34-35</span> ,
              <span class="modal-verse" id="John 15:9">15:9</span> ,
              <span class="modal-verse" id="John 15:12">15:12</span> ,
              <span class="modal-verse" id="John 15:17">15:17</span> ,
              <span class="modal-verse" id="Romans 12:10">Romans 12:10</span> ,
              <span class="modal-verse" id="Romans 13:8">13:8</span> ,
              <span class="modal-verse" id="1 Corinthians 16:14">1 Corinthians 16:14</span> ,
              <span class="modal-verse" id="2 Corinthians 6:13">2 Corinthians 6:13</span> ,
              <span class="modal-verse" id="2 Corinthians 9:7">9:7</span> ,
              <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span> ,
              <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
              <span class="modal-verse" id="1 Timothy 6:2">1 Timothy 6:2</span> ,
              <span class="modal-verse" id="Hebrews 13:1">Hebrews 13:1</span> ,
              <span class="modal-verse" id="Hebrews 10:24">10:24</span> ,
              <span class="modal-verse" id="1 Peter 1:22">1 Peter 1:22</span> ,
              <span class="modal-verse" id="1 Peter 2:1">2:1</span> ,
              <span class="modal-verse" id="1 Peter 2:17">2:17</span> ,
              <span class="modal-verse" id="1 Peter 3:8">3:8</span> ,
              <span class="modal-verse" id="1 John 3:11">1 John 3:11</span> ,
              <span class="modal-verse" id="1 John 3:16-18">3:16-18</span> ,
              <span class="modal-verse" id="1 John 3:23">3:23</span> ,
              <span class="modal-verse" id="1 John 4:7">4:7</span> ,
              <span class="modal-verse" id="1 John 4:11">4:11</span> ,
              <span class="modal-verse" id="1 John 4:21">4:21</span> ,
              <span class="modal-verse" id="2 John 1:5">2 John 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          Unsaved
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 10:33">1 Corinthians 10:33</span> ,
              <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span> ,
              <span class="modal-verse" id="3 John 1:5">3 John 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          Family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 11:29">Proverbs 11:29</span> ,
              <span class="modal-verse" id="Proverbs 15:17">15:17</span> ,
              <span class="modal-verse" id="Proverbs 15:20">15:20</span> ,
              <span class="modal-verse" id="Proverbs 23:22">23:22</span> ,
              <span class="modal-verse" id="Ephesians 5:25">Ephesians 5:25</span> ,
              <span class="modal-verse" id="Ephesians 5:28">5:28</span> ,
              <span class="modal-verse" id="Ephesians 5:33">5:33</span> ,
              <span class="modal-verse" id="Colossians 3:19">Colossians 3:19</span> ,
              <span class="modal-verse" id="Titus 2:4">Titus 2:4</span>
            </li>
          </ul>
        </li>
        <li>
          Stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:34">Leviticus 19:34</span> ,
              <span class="modal-verse" id="Deuteronomy 10:19">Deuteronomy 10:19</span> ,
              <span class="modal-verse" id="Deuteronomy 23:7">23:7</span> ,
              <span class="modal-verse" id="Matthew 25:35">Matthew 25:35</span>
            </li>
          </ul>
        </li>
        <li>
          Enemy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:4-5">Exodus 23:4-5</span> ,
              <span class="modal-verse" id="Job 31:29">Job 31:29</span> ,
              <span class="modal-verse" id="Proverbs 24:17-18">Proverbs 24:17-18</span> ,
              <span class="modal-verse" id="Matthew 5:44">Matthew 5:44</span> ,
              <span class="modal-verse" id="Luke 6:27">Luke 6:27</span> ,
              <span class="modal-verse" id="Luke 6:35">6:35</span> ,
              <span class="modal-verse" id="Romans 12:21">Romans 12:21</span>
            </li>
          </ul>
        </li>
        <li>
          Friend
          <ul class="sub">
            <li>
              <span class="modal-verse" id="John 15:13">John 15:13</span>
            </li>
          </ul>
        </li>
        <li>
          Children
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:10">Matthew 18:10</span> ,
              <span class="modal-verse" id="Mark 10:14">Mark 10:14</span> ,
              <span class="modal-verse" id="Luke 18:16">Luke 18:16</span>
            </li>
          </ul>
        </li>
        <li>
          Neighbor (all)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
              <span class="modal-verse" id="Proverbs 3:29">Proverbs 3:29</span> ,
              <span class="modal-verse" id="Proverbs 11:12">11:12</span> ,
              <span class="modal-verse" id="Proverbs 14:21">14:21</span> ,
              <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span> ,
              <span class="modal-verse" id="Zechariah 8:17">Zechariah 8:17</span> ,
              <span class="modal-verse" id="Matthew 19:19">Matthew 19:19</span> ,
              <span class="modal-verse" id="Mark 12:31">Mark 12:31</span> ,
              <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
              <span class="modal-verse" id="1 Corinthians 10:24">1 Corinthians 10:24</span> ,
              <span class="modal-verse" id="Galatians 5:14">Galatians 5:14</span> ,
              <span class="modal-verse" id="Galatians 5:20">5:20</span> ,
              <span class="modal-verse" id="Galatians 5:22">5:22</span> ,
              <span class="modal-verse" id="Galatians 6:10">6:10</span> ,
              <span class="modal-verse" id="Ephesians 5:2">Ephesians 5:2</span> ,
              <span class="modal-verse" id="Ephesians 6:7">6:7</span> ,
              <span class="modal-verse" id="Philippians 2:4">Philippians 2:4</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:8">1 Thessalonians 5:8</span> ,
              <span class="modal-verse" id="1 Timothy 6:11">1 Timothy 6:11</span> ,
              <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
              <span class="modal-verse" id="James 2:8">James 2:8</span> ,
              <span class="modal-verse" id="James 2:12">2:12</span>
            </li>
          </ul>
        </li>
        <li>
          Orphan/widow
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:27">James 1:27</span>
            </li>
          </ul>
        </li>
        <li>
          Charity
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 13:1-13">1 Corinthians 13:1-13</span> ,
              <span class="modal-verse" id="1 Corinthians 14:1">14:1</span> ,
              <span class="modal-verse" id="1 Corinthians 16:14">16:14</span> ,
              <span class="modal-verse" id="Colossians 3:14">Colossians 3:14</span> ,
              <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span> ,
              <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
              <span class="modal-verse" id="1 Peter 4:8">1 Peter 4:8</span> ,
              <span class="modal-verse" id="2 Peter 1:7">2 Peter 1:7</span>
            </li>
          </ul>
        </li>
        <li>
          External
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 7:12">Matthew 7:12</span> ,
              <span class="modal-verse" id="Matthew 22:39-40">22:39-40</span> ,
              <span class="modal-verse" id="Luke 6:31">Luke 6:31</span> ,
              <span class="modal-verse" id="Luke 6:36">6:36</span> ,
              <span class="modal-verse" id="Romans 15:1">Romans 15:1</span> ,
              <span class="modal-verse" id="Galatians 5:13">Galatians 5:13</span> ,
              <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
              <span class="modal-verse" id="2 Peter 1:7">2 Peter 1:7</span>
            </li>
          </ul>
        </li>
        <li>
          Internal
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 4:32">Ephesians 4:32</span> ,
              <span class="modal-verse" id="Titus 2:7">Titus 2:7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do good especially to the household of faith</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Hate haters of God; don’t help the ungodly</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 13:8">Deuteronomy 13:8</span> ,
          <span class="modal-verse" id="Deuteronomy 19:13">19:13</span> ,
          <span class="modal-verse" id="Deuteronomy 19:21">19:21</span> ,
          <span class="modal-verse" id="Judges 5:31">Judges 5:31</span> ,
          <span class="modal-verse" id="2 Chronicles 19:2">2 Chronicles 19:2</span> ,
          <span class="modal-verse" id="Psalm 15:4">Psalm 15:4</span> ,
          <span class="modal-verse" id="Psalm 26:5">26:5</span> ,
          <span class="modal-verse" id="Psalm 31:6">31:6</span> ,
          <span class="modal-verse" id="Psalm 40:4">40:4</span> ,
          <span class="modal-verse" id="Psalm 139:21-22">139:21-22</span> ,
          <span class="modal-verse" id="Proverbs 28:4">Proverbs 28:4</span> ,
          <span class="modal-verse" id="Proverbs 29:27">29:27</span> ,
          <span class="modal-verse" id="1 Corinthians 16:22">1 Corinthians 16:22</span> ,
          <span class="modal-verse" id="Revelation 2:2">Revelation 2:2</span>
        </li>
        <li>
          Let them alone (do not help/appease them)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 15:14">Matthew 15:14</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="money">MONEY (<span class="modal-verse" id="Proverbs 3:9">PROVERBS 3:9</span>)</h3>
  <ol>
    <li>
      <span class="main-li">Possessions</span>
      <ul class="styled">
        <li>
          Remember God (that He gives me the power to get wealth)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:12">Deuteronomy 6:12</span> ,
              <span class="modal-verse" id="Deuteronomy 8:2">8:2</span> ,
              <span class="modal-verse" id="Deuteronomy 8:11">8:11</span> ,
              <span class="modal-verse" id="Deuteronomy 8:18">8:18</span> ,
              <span class="modal-verse" id="1 Timothy 6:17">1 Timothy 6:17</span>
            </li>
          </ul>
        </li>
        <li>
          Know the state of your flock (budget/assessment; don’t waste your resources)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 12:27">Proverbs 12:27</span> ,
              <span class="modal-verse" id="Proverbs 14:4">14:4</span> ,
              <span class="modal-verse" id="Proverbs 18:9">18:9</span> ,
              <span class="modal-verse" id="Proverbs 27:23-27">27:23-27</span> ,
              <span class="modal-verse" id="John 6:12">John 6:12</span>
            </li>
          </ul>
        </li>
        <li>
          Lay not for yourselves treasures upon the earth, nor greatly multiply your silver and gold (or horses: possessions)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:16-17">Deuteronomy 17:16-17</span> (for kings),
              <span class="modal-verse" id="Proverbs 23:4-5">Proverbs 23:4-5</span> ,
              <span class="modal-verse" id="Matthew 6:19">Matthew 6:19</span> ,
              <span class="modal-verse" id="Matthew 6:24">6:24</span> ,
              <span class="modal-verse" id="Luke 12:21">Luke 12:21</span> ,
              <span class="modal-verse" id="Luke 14:33">14:33</span> ,
              <span class="modal-verse" id="Luke 16:13">16:13</span> ,
              <span class="modal-verse" id="Proverbs 11:26">Proverbs 11:26</span>
            </li>
            <li>
              Note: “lay up” means to store; put out of active service; or collect
            </li>
          </ul>
        </li>
        <li>
          Have a purse (wallet)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 22:35-36">Luke 22:35-36</span>
            </li>
          </ul>
        </li>
        <li>
          Have a scrip (bag for possessions)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 22:35-36">Luke 22:35-36</span>
            </li>
          </ul>
        </li>
        <li>
          Leave an inheritance
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:22">Proverbs 13:22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Debt</span>
      <ul class="styled">
        <li>
          Pay your debts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 37:21">Psalm 37:21</span> ,
              <span class="modal-verse" id="Romans 13:8">Romans 13:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Provide physical needs (food, water, shelter, clothing)</span>
      <ul class="styled">
        <li>
          Husbands to the wife/family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 3:17-19">Genesis 3:17-19</span> ,
              <span class="modal-verse" id="Exodus 21:10">Exodus 21:10</span> ,
              <span class="modal-verse" id="Ephesians 5:28-29">Ephesians 5:28-29</span> ,
              <span class="modal-verse" id="1 Timothy 5:8">1 Timothy 5:8</span> ,
              <span class="modal-verse" id="1 Timothy 5:16">5:16</span>
            </li>
          </ul>
        </li>
        <li>
          Children/grandchildren repay your parents
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 15:5-6">Matthew 15:5-6</span> ,
              <span class="modal-verse" id="Mark 7:11-12">Mark 7:11-12</span> ,
              <span class="modal-verse" id="John 19:26-27">John 19:26-27</span> ,
              <span class="modal-verse" id="1 Timothy 5:4">1 Timothy 5:4</span> ,
              <span class="modal-verse" id="1 Timothy 5:16">5:16</span> (Nephew archaic definition)
            </li>
          </ul>
        </li>
        <li>
          Believer to poor brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:35">Leviticus 25:35</span> ,
              <span class="modal-verse" id="Matthew 10:40-42">Matthew 10:40-42</span> ,
              <span class="modal-verse" id="Matthew 25:35">25:35</span> ,
              <span class="modal-verse" id="Matthew 25:40">25:40</span> ,
              <span class="modal-verse" id="Mark 9:37">Mark 9:37</span> ,
              <span class="modal-verse" id="Mark 9:41">9:41</span> ,
              <span class="modal-verse" id="Luke 9:48">Luke 9:48</span> ,
              <span class="modal-verse" id="Romans 12:13">Romans 12:13</span> ,
              <span class="modal-verse" id="Galatians 6:2">Galatians 6:2</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:14">1 Thessalonians 5:14</span> ,
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
              <span class="modal-verse" id="Hebrews 13:2">Hebrews 13:2</span> ,
              <span class="modal-verse" id="1 Peter 4:9">1 Peter 4:9</span> ,
              <span class="modal-verse" id="1 John 3:17">1 John 3:17</span>
            </li>
          </ul>
        </li>
        <li>
          Your enemy (food and water)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 12:20">Romans 12:20</span> ,
              <span class="modal-verse" id="Proverbs 25:21-22">Proverbs 25:21-22</span>
            </li>
          </ul>
        </li>
        <li>
          The poor (unspecified)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span> ,
              <span class="modal-verse" id="Job 29:16">Job 29:16</span> ,
              <span class="modal-verse" id="Job 31:16-20">31:16-20</span> ,
              <span class="modal-verse" id="Job 31:32">31:32</span> ,
              <span class="modal-verse" id="Proverbs 11:25">Proverbs 11:25</span> ,
              <span class="modal-verse" id="Proverbs 14:21">14:21</span> ,
              <span class="modal-verse" id="Proverbs 14:31">14:31</span> ,
              <span class="modal-verse" id="Proverbs 19:17">19:17</span> ,
              <span class="modal-verse" id="Proverbs 21:13">21:13</span> ,
              <span class="modal-verse" id="Proverbs 22:9">22:9</span> ,
              <span class="modal-verse" id="Proverbs 28:27">28:27</span> ,
              <span class="modal-verse" id="Proverbs 30:14">30:14</span> ,
              <span class="modal-verse" id="Proverbs 31:20">31:20</span> ,
              <span class="modal-verse" id="Isaiah 58:7">Isaiah 58:7</span> ,
              <span class="modal-verse" id="Matthew 19:21">Matthew 19:21</span> ,
              <span class="modal-verse" id="Mark 10:21">Mark 10:21</span> ,
              <span class="modal-verse" id="Luke 3:11">Luke 3:11</span> ,
              <span class="modal-verse" id="Luke 11:41">11:41</span> ,
              <span class="modal-verse" id="Luke 12:33">12:33</span> ,
              <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
              <span class="modal-verse" id="1 Timothy 6:18">1 Timothy 6:18</span> ,
              <span class="modal-verse" id="Hebrews 13:16">Hebrews 13:16</span>
            </li>
          </ul>
        <li>
          not the rich
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 22:16">Proverbs 22:16</span> ,
              <span class="modal-verse" id="Luke 14:12-14">Luke 14:12-14</span>
            </li>
          </ul>
        </li>
        <li>
          Laborers for God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="3 John 1:8">3 John 1:8</span> ,
              <span class="modal-verse" id="Philippians 2:29">Philippians 2:29</span> ,
              <span class="modal-verse" id="2 Corinthians 7:2">2 Corinthians 7:2</span> ,
              <span class="modal-verse" id="Colossians 4:10">Colossians 4:10</span> ,
              <span class="modal-verse" id="Titus 3:13-14">Titus 3:13-14</span>
            </li>
          </ul>
        </li>
        <li>
          Receive him not into your house (false prophet)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 John 1:10">2 John 1:10</span>
            </li>
          </ul>
        </li>
    </li>
    </ul>
    </li>
    <li>
      <span class="main-li">Giving</span>
      <ul class="styled">
        <li>
          Give/lend (to brother) cheerfully
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:10">Deuteronomy 15:10</span> ,
              <span class="modal-verse" id="Romans 12:8">Romans 12:8</span> ,
              <span class="modal-verse" id="2 Corinthians 9:7">2 Corinthians 9:7</span> ,
              <span class="modal-verse" id="1 Peter 4:9">1 Peter 4:9</span>
            </li>
          </ul>
        </li>
        <li>
          Give (alms) with simplicity (with sincerity; not to be seen of men)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 6:1-4">Matthew 6:1-4</span> ,
              <span class="modal-verse" id="Romans 12:8">Romans 12:8</span>
            </li>
          </ul>
        </li>
        <li>
          Give to him that asks you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 21:26">Proverbs 21:26</span> ,
              <span class="modal-verse" id="Matthew 5:42">Matthew 5:42</span> ,
              <span class="modal-verse" id="Luke 6:30">Luke 6:30</span> ,
              <span class="modal-verse" id="Luke 6:38">Luke 6:38</span>
            </li>
            <li>
              Note: there is a concept of refusing in the Bible: young widows; those who are lazy; false prophets
            </li>
          </ul>
        </li>
        <li>
          Give gifts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 16:9">Luke 16:9</span> ,
              <span class="modal-verse" id="Proverbs 17:8">Proverbs 17:8</span> ,
              <span class="modal-verse" id="Proverbs 18:16">18:16</span> ,
              <span class="modal-verse" id="Proverbs 19:6">19:6</span> ,
              <span class="modal-verse" id="Proverbs 21:14">21:14</span>
            </li>
          </ul>
        </li>
        <li>
          Be reconciled with thy brother before giving your offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:23-24">Matthew 5:23-24</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Financial responsibility</span>
      <ul class="styled">
        <li>
          First prepare your work (before you buy the house, start the family, etc.)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:27">Proverbs 24:27</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Tithing</span>
      <ul class="styled">
        <li>
          Pay 1/10 of your increase unto the Lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 14:20">Genesis 14:20</span> ,
              <span class="modal-verse" id="Genesis 28:22">28:22</span> ,
              <span class="modal-verse" id="Leviticus 27:30">Leviticus 27:30</span> ,
              <span class="modal-verse" id="Leviticus 27:32">27:32</span> ,
              <span class="modal-verse" id="Malachi 3:8-10">Malachi 3:8-10</span> ,
              <span class="modal-verse" id="Matthew 22:21">Matthew 22:21</span> ,
              <span class="modal-verse" id="Matthew 23:23">23:23</span> ,
              <span class="modal-verse" id="Mark 12:17">Mark 12:17</span> ,
              <span class="modal-verse" id="Luke 11:42">Luke 11:42</span> ,
              <span class="modal-verse" id="Luke 18:12">18:12</span> ,
              <span class="modal-verse" id="Luke 20:25">20:25</span> ,
              <span class="modal-verse" id="1 Corinthians 9:3-14">1 Corinthians 9:3-14</span> ,
              <span class="modal-verse" id="1 Corinthians 16:2">16:2</span> ,
              <span class="modal-verse" id="Hebrews 7:8">Hebrews 7:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Business Ethics</span>
      <ul class="styled">
        <li>
          Hate suretyship
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 6:1-5">Proverbs 6:1-5</span> ,
              <span class="modal-verse" id="Proverbs 11:15">11:15</span> ,
              <span class="modal-verse" id="Proverbs 17:18">17:18</span> ,
              <span class="modal-verse" id="Proverbs 20:16">20:16</span> ,
              <span class="modal-verse" id="Proverbs 22:26">22:26</span> ,
              <span class="modal-verse" id="Proverbs 27:13">27:13</span>
            </li>
          </ul>
        </li>
        <li>
          The wages of him that is hired shall not abide with thee all night until the morning
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:13">Leviticus 19:13</span> ,
              <span class="modal-verse" id="Deuteronomy 24:14-15">Deuteronomy 24:14-15</span> ,
              <span class="modal-verse" id="Malachi 3:5">Malachi 3:5</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not steal
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:15">Exodus 20:15</span> ,
              <span class="modal-verse" id="Leviticus 19:11">Leviticus 19:11</span> ,
              <span class="modal-verse" id="Deuteronomy 5:19">Deuteronomy 5:19</span> ,
              <span class="modal-verse" id="Matthew 19:18">Matthew 19:18</span> ,
              <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
              <span class="modal-verse" id="Mark 10:19">10:19</span> ,
              <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
              <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
              <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
              <span class="modal-verse" id="1 Timothy 1:10">1 Timothy 1:10</span> ,
              <span class="modal-verse" id="Titus 2:10">Titus 2:10</span> ,
              <span class="modal-verse" id="1 Peter 4:15">1 Peter 4:15</span>
            </li>
          </ul>
        </li>
        <li>
          False balance
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:35-36">Leviticus 19:35-36</span> ,
              <span class="modal-verse" id="Deuteronomy 25:13-15">Deuteronomy 25:13-15</span> ,
              <span class="modal-verse" id="Proverbs 11:1">Proverbs 11:1</span> ,
              <span class="modal-verse" id="Proverbs 16:11">16:11</span> ,
              <span class="modal-verse" id="Proverbs 20:23">20:23</span> ,
              <span class="modal-verse" id="Ezekiel 45:10">Ezekiel 45:10</span>
            </li>
          </ul>
        </li>
        <li>
          Defraud not
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:2">Leviticus 6:2</span> ,
              <span class="modal-verse" id="Leviticus 19:13">19:13</span> ,
              <span class="modal-verse" id="Deuteronomy 24:14-15">Deuteronomy 24:14-15</span> ,
              <span class="modal-verse" id="Proverbs 13:11">Proverbs 13:11</span> ,
              <span class="modal-verse" id="Proverbs 21:6">21:6</span> ,
              <span class="modal-verse" id="Proverbs 22:22">22:22</span> ,
              <span class="modal-verse" id="Jeremiah 22:13">Jeremiah 22:13</span> ,
              <span class="modal-verse" id="Mark 10:19">Mark 10:19</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:6">1 Thessalonians 4:6</span> ,
              <span class="modal-verse" id="James 5:4">James 5:4</span>
            </li>
            <li>
              Meaning: to take something that belongs to someone through deceit/cheating/lying/tricks
            </li>
          </ul>
        </li>
        <li>
          Extortion/robbery
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:2">Leviticus 6:2</span> ,
              <span class="modal-verse" id="Leviticus 19:13">19:13</span> ,
              <span class="modal-verse" id="Proverbs 1:15">Proverbs 1:15</span> ,
              <span class="modal-verse" id="Proverbs 21:7">21:7</span> ,
              <span class="modal-verse" id="Proverbs 22:22">22:22</span> ,
              <span class="modal-verse" id="Proverbs 28:24">28:24</span> ,
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span> ,
              <span class="modal-verse" id="Ezekiel 22:12">22:12</span> ,
              <span class="modal-verse" id="Ezekiel 45:9">45:9</span> ,
              <span class="modal-verse" id="Luke 3:13">Luke 3:13</span> ,
              <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span>
            </li>
            <li>
              Meaning: to take something that belongs to someone through force or threats
            </li>
          </ul>
        </li>
        <li>
          Restore lost property
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:4">Exodus 23:4</span> ,
              <span class="modal-verse" id="Leviticus 6:3">Leviticus 6:3</span> ,
              <span class="modal-verse" id="Deuteronomy 22:1-3">Deuteronomy 22:1-3</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lending</span>
      <ul class="styled">
        <li>
          Lend to poor brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:7-11">Deuteronomy 15:7-11</span> ,
              <span class="modal-verse" id="Psalm 112:5">Psalm 112:5</span> ,
              <span class="modal-verse" id="Matthew 5:42">Matthew 5:42</span>
            </li>
          </ul>
        </li>
        <li>
          Hope for nothing in return (when lending)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:9">Deuteronomy 15:9</span> ,
              <span class="modal-verse" id="Luke 6:30">Luke 6:30</span> ,
              <span class="modal-verse" id="Luke 6:35">6:35</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not lend upon usury to thy brother (charging interest)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:25">Exodus 22:25</span> ,
              <span class="modal-verse" id="Leviticus 25:35-37">Leviticus 25:35-37</span> ,
              <span class="modal-verse" id="Deuteronomy 23:19-20">Deuteronomy 23:19-20</span> ,
              <span class="modal-verse" id="Nehemiah 5:9-11">Nehemiah 5:9-11</span> ,
              <span class="modal-verse" id="Psalm 15:5">Psalm 15:5</span> ,
              <span class="modal-verse" id="Proverbs 28:8">Proverbs 28:8</span> ,
              <span class="modal-verse" id="Ezekiel 18:8">Ezekiel 18:8</span> ,
              <span class="modal-verse" id="Ezekiel 22:12">22:12</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t hold your poor neighbor’s pledge (collateral) overnight (clothing)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:26-27">Exodus 22:26-27</span> ,
              <span class="modal-verse" id="Deuteronomy 24:12-13">Deuteronomy 24:12-13</span> ,
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t go into thy brother’s house to fetch his pledge: wait for him to bring it out
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:10-11">Deuteronomy 24:10-11</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t take a widow’s raiment to pledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:17">Deuteronomy 24:17</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t take the nether or upper millstone as a pledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:6">Deuteronomy 24:6</span>
            </li>
          </ul>
        </li>
        <li>
          Take the pledge of the stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 20:16">Proverbs 20:16</span> ,
              <span class="modal-verse" id="Proverbs 27:13">27:13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="new-testament-church">NEW TESTAMENT CHURCH</h3>
  <ol>
    <li>
      <span class="main-li">Go to church</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:5">Deuteronomy 12:5</span> ,
          <span class="modal-verse" id="Hebrews 10:25">Hebrews 10:25</span>
        </li>
        <li>
          <span class="main-li">Note: the word “Church” is used interchangeably with congregation</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Hebrews 2:12">Hebrews 2:12</span> quotes <span class="modal-verse" id="Psalm 22:22">Psalm 22:22</span>
            </li>
            <li>
              also <span class="modal-verse" id="Acts 7:38">Acts 7:38</span>, all of the congregation of the children of Israel is quoted as “church in the wilderness”
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Follow men of God (spiritual leaders)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 4:16">1 Corinthians 4:16</span> ,
          <span class="modal-verse" id="1 Corinthians 11:1">11:1</span> ,
          <span class="modal-verse" id="Philippians 3:17">Philippians 3:17</span> ,
          <span class="modal-verse" id="Hebrews 6:12">Hebrews 6:12</span> ,
          <span class="modal-verse" id="Hebrews 13:7">13:7</span> ,
          <span class="modal-verse" id="James 5:10">James 5:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be of one mind/spirit (teamwork, unity)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 3:25">Mark 3:25</span> ,
          <span class="modal-verse" id="Romans 15:5-7">Romans 15:5-7</span> ,
          <span class="modal-verse" id="1 Corinthians 1:10">1 Corinthians 1:10</span> ,
          <span class="modal-verse" id="2 Corinthians 13:11">2 Corinthians 13:11</span> ,
          <span class="modal-verse" id="Ephesians 4:3">Ephesians 4:3</span> ,
          <span class="modal-verse" id="Philippians 1:27">Philippians 1:27</span> ,
          <span class="modal-verse" id="Philippians 2:2">2:2</span> ,
          <span class="modal-verse" id="Philippians 3:16">3:16</span> ,
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Make not my Father’s house a house of merchandise</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Buying_And_Selling_At_Church.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: buying and selling at church</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 21:12-13">Matthew 21:12-13</span> ,
          <span class="modal-verse" id="Mark 11:15-17">Mark 11:15-17</span> ,
          <span class="modal-verse" id="Luke 19:45-46">Luke 19:45-46</span> ,
          <span class="modal-verse" id="John 2:16">John 2:16</span>
        </li>
        <li>
          Meaning: there shouldn’t be buying or selling of goods or services in the church building
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">A foreign speaker is required to translate or have a translator in the church</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:13">1 Corinthians 14:13</span> ,
          <span class="modal-verse" id="1 Corinthians 14:27-28">14:27-28</span> ,
          <span class="modal-verse" id="1 Corinthians 14:33">14:33</span>
        </li>
        <li>
          Note: “Tongues” is used interchangeably with language
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Acts 2:1-13">Acts 2:1-13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">A maximum of 3 preachers in a church service is permitted</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:29">1 Corinthians 14:29</span> ,
          <span class="modal-verse" id="1 Corinthians 14:33">14:33</span>
        </li>
        <li>
          Note: a preacher isn’t necessarily the pastor/bishop/etc
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">One man speaks at a time (in church) - not open mic night</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:30-33">1 Corinthians 14:30-33</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Women keep silence in the churches</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:34-35">1 Corinthians 14:34-35</span> ,
          <span class="modal-verse" id="1 Timothy 2:11-12">1 Timothy 2:11-12</span> ,
          <span class="modal-verse" id="Revelation 2:20">Revelation 2:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not call a religious leader rabbi, master or father (rabbi means master. God is your spiritual master and father</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 23:8-10">Matthew 23:8-10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Widows who fulfill these requirements can go to the church for assistance</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span> ,
          <span class="modal-verse" id="1 Timothy 5:9-16">9-16:5</span>
        </li>
        <li>
          Husband is dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span>
            </li>
          </ul>
        </li>
        <li>
          Born again-saved
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span>
            </li>
          </ul>
        </li>
        <li>
          At least 60 years old
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:9">1 Timothy 5:9</span>
            </li>
          </ul>
        </li>
        <li>
          Practiced monogamy in marriage
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:9">1 Timothy 5:9</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">5:14</span>
            </li>
          </ul>
        </li>
        <li>
          Godly- well reported of good works
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5-6">1 Timothy 5:5-6</span> ,
              <span class="modal-verse" id="1 Timothy 5:10">5:10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      Be not many masters (appropriate ratio of church leaders to members and no confusion in who is the boss)
      <ul class="styled">
        <li>
          <span class="modal-verse" id="James 3:1">James 3:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Let all things be done decently and in order (with the purpose of edifying other believers)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:26">1 Corinthians 14:26</span> ,
          <span class="modal-verse" id="1 Corinthians 14:40">14:40</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> (tumult)

        </li>
      </ul>
    </li>
    <li>
      Pastors and deacons must fulfill biblical requirements
      <ul class="styled">
        <li>
          Principle: Elder = Bishop = Pastor = Overseer = Steward
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 1:5">Titus 1:5</span> ,
              <span class="modal-verse" id="Titus 1:7">1:7</span> ,
              <span class="modal-verse" id="Acts 20:17">Acts 20:17</span> ,
              <span class="modal-verse" id="Acts 20:28">20:28</span> ,
              <span class="modal-verse" id="1 Peter 5:1-2">1 Peter 5:1-2</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="modal-verse" id="1 Timothy 3:2-7">1 Timothy 3:2-7</span> ,
          <span class="modal-verse" id="1 Timothy 3:8-12">8-12</span> ,
          <span class="modal-verse" id="Titus 1:6-9">Titus 1:6-9</span>
        </li>
      </ul>
    </li>
    <li>
      Pastors and deacons (and spiritual workers) are paid from the church
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 25:4">Deuteronomy 25:4</span> ,
          <span class="modal-verse" id="Acts 6:2">Acts 6:2</span> ,
          <span class="modal-verse" id="Romans 15:27">Romans 15:27</span> ,
          <span class="modal-verse" id="1 Corinthians 9">1 Corinthians 9</span> (note: altogether),
          <span class="modal-verse" id="Galatians 6:6">Galatians 6:6</span> (“communicate” here means to give),
          <span class="modal-verse" id="1 Timothy 5:17-18">1 Timothy 5:17-18</span> ,
          <span class="modal-verse" id="Hebrews 13:7">Hebrews 13:7</span>
        </li>
      </ul>
    </li>
    <li>
      Pastors oversee the church (administer/supervisor)
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 20:28">Acts 20:28</span> ,
          <span class="modal-verse" id="1 Peter 5:2">1 Peter 5:2</span>
        </li>
      </ul>
    </li>
    <li>
      Pastors don’t rule as a lord
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 10:42-45">Mark 10:42-45</span> ,
          <span class="modal-verse" id="1 Peter 5:2-3">1 Peter 5:2-3</span>
        </li>
      </ul>
    </li>
    <li>
      Pastor: commit the distribution of God’s word to faithful men
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Timothy 2:2">2 Timothy 2:2</span>
        </li>
      </ul>
    </li>
    <li>
      Ordain elders in every city
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/A_Church_In_Every_City.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: a church in every city</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Titus 1:5">Titus 1:5</span>
        </li>
      </ul>
    </li>
    <li>
      Lay hands on no man suddenly
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 5:22">1 Timothy 5:22</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="obeying-authority">OBEYING AUTHORITY</h3>
  <ol>
    <li>
      <span class="main-li">Obey your authorities (in general)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 13:1-2">Romans 13:1-2</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span> ,
          <span class="modal-verse" id="Ephesians 5:21">Ephesians 5:21</span> ,
          <span class="modal-verse" id="1 Peter 5:5">1 Peter 5:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Wife to husband</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 7:11">Proverbs 7:11</span> ,
          <span class="modal-verse" id="Proverbs 19:13">19:13</span> ,
          <span class="modal-verse" id="Proverbs 21:9">21:9</span> ,
          <span class="modal-verse" id="Proverbs 21:19">21:19</span> ,
          <span class="modal-verse" id="Proverbs 25:24">25:24</span> ,
          <span class="modal-verse" id="Proverbs 27:15-16">27:15-16</span> ,
          <span class="modal-verse" id="Ephesians 5:22-24">Ephesians 5:22-24</span> ,
          <span class="modal-verse" id="1 Peter 3:1">1 Peter 3:1</span> ,
          <span class="modal-verse" id="1 Peter 3:5">3:5</span> ,
          <span class="modal-verse" id="1 Peter 3:6">3:6</span> ,
          <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
          <span class="modal-verse" id="Colossians 3:18">Colossians 3:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Children to parents</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 1:8">Proverbs 1:8</span> ,
          <span class="modal-verse" id="Proverbs 4:1-4">4:1-4</span> ,
          <span class="modal-verse" id="Proverbs 4:10">4:10</span> ,
          <span class="modal-verse" id="Proverbs 6:20-23">6:20-23</span> ,
          <span class="modal-verse" id="Proverbs 13:1">13:1</span> ,
          <span class="modal-verse" id="Proverbs 15:5">15:5</span> ,
          <span class="modal-verse" id="Proverbs 23:22">23:22</span> ,
          <span class="modal-verse" id="Proverbs 23:26">23:26</span> ,
          <span class="modal-verse" id="Ephesians 6:1">Ephesians 6:1</span> ,
          <span class="modal-verse" id="Colossians 3:20">Colossians 3:20</span> ,
          <span class="modal-verse" id="1 Timothy 3:4">1 Timothy 3:4</span> ,
          <span class="modal-verse" id="1 Timothy 3:12">3:12</span> ,
          <span class="modal-verse" id="Titus 1:6">Titus 1:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Servants to masters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Samuel 22:14">1 Samuel 22:14</span> ,
          <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
          <span class="modal-verse" id="Colossians 3:22">Colossians 3:22</span> ,
          <span class="modal-verse" id="1 Timothy 6:2">1 Timothy 6:2</span> ,
          <span class="modal-verse" id="Titus 2:9-10">Titus 2:9-10</span> ,
          <span class="modal-verse" id="1 Peter 2:18">1 Peter 2:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Congregation to pastor & ministry workers (within church role)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 16:16">1 Corinthians 16:16</span> ,
          <span class="modal-verse" id="Hebrews 13:17">Hebrews 13:17</span> ,
          <span class="modal-verse" id="1 Peter 5:5">1 Peter 5:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Citizen to civil authority/laws (within government role)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 17:10-11">Deuteronomy 17:10-11</span> ,
          <span class="modal-verse" id="Romans 13:5">Romans 13:5</span> ,
          <span class="modal-verse" id="Titus 3:1">Titus 3:1</span> ,
          <span class="modal-verse" id="1 Peter 2:13-14">1 Peter 2:13-14</span> ,
          <span class="modal-verse" id="1 Peter 4:6">4:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Exception: Don’t obey commands to sin</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 4:19">Acts 4:19</span> ,
          <span class="modal-verse" id="Acts 5:29">5:29</span> ,
          <span class="modal-verse" id="Romans 13:1">Romans 13:1</span> (chain of command),
          <span class="modal-verse" id="Daniel 1:8-9">Daniel 1:8-9</span> ,
          <span class="modal-verse" id="Exodus 1:17">Exodus 1:17</span> ,
          <span class="modal-verse" id="Exodus 1:21">1:21</span> ,
          <span class="modal-verse" id="1 Kings 18:3-4">1 Kings 18:3-4</span>
          <ul class="sub">
            <li>
              God’s commands have pre-eminence over man’s commands
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="patience">PATIENCE</h3>
  <ol>
    <li>
      <span class="main-li">Be Patient</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 7:8">Ecclesiastes 7:8</span> ,
          <span class="modal-verse" id="Luke 21:19">Luke 21:19</span> ,
          <span class="modal-verse" id="Romans 12:12">Romans 12:12</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:14">1 Thessalonians 5:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="1 Timothy 6:11">6:11</span> ,
          <span class="modal-verse" id="2 Timothy 2:24">2 Timothy 2:24</span> ,
          <span class="modal-verse" id="2 Timothy 4:2">4:2</span> ,
          <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
          <span class="modal-verse" id="James 1:4">James 1:4</span> ,
          <span class="modal-verse" id="James 5:7-8">5:7-8</span> ,
          <span class="modal-verse" id="James 5:10">5:10</span> ,
          <span class="modal-verse" id="2 Peter 1:6">2 Peter 1:6</span> ,
          <span class="modal-verse" id="2 Peter 3:15">3:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Wait upon the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 27:14">Psalm 27:14</span> ,
          <span class="modal-verse" id="Psalm 37:7">37:7</span> ,
          <span class="modal-verse" id="Psalm 37:34">37:34</span> ,
          <span class="modal-verse" id="Proverbs 20:22">Proverbs 20:22</span> ,
          <span class="modal-verse" id="Zephaniah 3:8">Zephaniah 3:8</span> ,
          <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="physical">PHYSICAL</h3>
  <ol>
    <li>
      <span class="main-li">Hair</span>
      <ul class="styled">
        <li>
          Ye shall not round the corners of your heads, neither shalt thou mar the corners of thy beard
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:27">Leviticus 19:27</span> ,
              <span class="modal-verse" id="Leviticus 21:5">Leviticus 21:5</span> ,
              <span class="modal-verse" id="Deuteronomy 14:1">Deuteronomy 14:1</span> ,
              <span class="modal-verse" id="Ezekiel 44:20">Ezekiel 44:20</span>
              <ul class="styled">
                <li>
                  Meaning: Not to carve out strange designs in your head/beard (deform/disfigure). This is prevalent in pagan cultures.
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Men should have short hair; women should have long hair
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
              <span class="modal-verse" id="1 Corinthians 11:1-16">1 Corinthians 11:1-16</span> ,
              <span class="modal-verse" id="Ezekiel 44:20">Ezekiel 44:20</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Skin</span>
      <ul class="styled">
        <li>
          Ye shall not make any cuttings in your flesh
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:28">Leviticus 19:28</span> ,
              <span class="modal-verse" id="Leviticus 21:5">21:5</span> ,
              <span class="modal-verse" id="Deuteronomy 14:1">Deuteronomy 14:1</span>
            </li>
          </ul>
        </li>
        <li>
          No tattoos
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:28">Leviticus 19:28</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Food</span>
      <ul class="styled">
        <li>
          Don’t be a glutton
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 21:20">Deuteronomy 21:20</span> ,
              <span class="modal-verse" id="Proverbs 13:25">Proverbs 13:25</span> ,
              <span class="modal-verse" id="Proverbs 23:1-3">23:1-3</span> ,
              <span class="modal-verse" id="Proverbs 23:20-21">23:20-21</span> ,
              <span class="modal-verse" id="Proverbs 25:16">25:16</span> ,
              <span class="modal-verse" id="Proverbs 25:27">25:27</span> ,
              <span class="modal-verse" id="Proverbs 27:7">27:7</span> ,
              <span class="modal-verse" id="Ecclesiastes 10:16-17">Ecclesiastes 10:16-17</span> ,
              <span class="modal-verse" id="2 Thessalonians 3:10">2 Thessalonians 3:10</span> ,
              <span class="modal-verse" id="Galatians 5:21">Galatians 5:21</span>
            </li>
            <li>
              Not given to wine
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
                  <span class="modal-verse" id="1 Timothy 3:8">3:8</span> ,
                  <span class="modal-verse" id="Titus 1:7">Titus 1:7</span> ,
                  <span class="modal-verse" id="Titus 2:3">2:3</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Don’t fast for show: no sad countenance, anoint the head with oil, wash face
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 6:16-18">Matthew 6:16-18</span>
            </li>
            <li>
              We should fast, but there is no specified amount
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Joel 1:14">Joel 1:14</span>
                  <span class="modal-verse" id="Joel 2:12">2:12</span>
                  <span class="modal-verse" id="Joel 2:15">2:15</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Cause no offense in eating (and receive the weaker brother)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 14:1">Romans 14:1</span> ,
              <span class="modal-verse" id="Romans 14:3">14:3</span> ,
              <span class="modal-verse" id="Romans 14:5">14:5</span> ,
              <span class="modal-verse" id="Romans 14:13">14:13</span> ,
              <span class="modal-verse" id="Romans 14:15">14:15</span> ,
              <span class="modal-verse" id="Romans 14:16">14:16</span> ,
              <span class="modal-verse" id="Romans 14:19">14:19</span> ,
              <span class="modal-verse" id="Romans 14:20">14:20</span> ,
              <span class="modal-verse" id="Romans 14:22">14:22</span> ,
              <span class="modal-verse" id="Romans 15:1-2">15:1-2</span> ,
              <span class="modal-verse" id="Romans 15:7">15:7</span> ,
              <span class="modal-verse" id="1 Corinthians 8:9">1 Corinthians 8:9</span> ,
              <span class="modal-verse" id="1 Corinthians 10:27-28">10:27-28</span> ,
              <span class="modal-verse" id="1 Corinthians 10:32">10:32</span>
            </li>
            <li>
              Example: food sacrificed unto idols
            </li>
          </ul>
        </li>
        <li>
          Eat such things as are set before you (don’t be a picky eater)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:13">Proverbs 24:13</span> ,
              <span class="modal-verse" id="Luke 10:7-8">Luke 10:7-8</span> ,
              <span class="modal-verse" id="1 Corinthians 10:25">1 Corinthians 10:25</span> ,
              <span class="modal-verse" id="1 Corinthians 10:27">10:27</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t eat or drink blood
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 9:4">Genesis 9:4</span> ,
              <span class="modal-verse" id="Leviticus 7:26">Leviticus 7:26</span> ,
              <span class="modal-verse" id="Leviticus 17:12">17:12</span> ,
              <span class="modal-verse" id="Leviticus 17:14">17:14</span> ,
              <span class="modal-verse" id="Leviticus 19:26">19:26</span> ,
              <span class="modal-verse" id="Deuteronomy 12:16">Deuteronomy 12:16</span> ,
              <span class="modal-verse" id="Deuteronomy 12:23-25">12:23-25</span> ,
              <span class="modal-verse" id="Deuteronomy 15:23">15:23</span> ,
              <span class="modal-verse" id="Acts 15:20">Acts 15:20</span> ,
              <span class="modal-verse" id="Acts 15:29">15:29</span>
            </li>
            <li>
              Pour out the blood on the ground (of animals you eat)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Leviticus 17:13">Leviticus 17:13</span> ,
                  <span class="modal-verse" id="Deuteronomy 12:16">Deuteronomy 12:16</span> ,
                  <span class="modal-verse" id="Deuteronomy 12:24">12:24</span> ,
                  <span class="modal-verse" id="Deuteronomy 15:23">15:23</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Drink</span>
      <ul class="styled">
        <li>
          Don’t drink alcohol, don’t do drugs: Be sober (Have a clear state of mind)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 21:20">Deuteronomy 21:20</span> ,
              <span class="modal-verse" id="Psalm 75:8">Psalm 75:8</span> ,
              <span class="modal-verse" id="Proverbs 20:1">Proverbs 20:1</span> ,
              <span class="modal-verse" id="Proverbs 23:20-21">23:20-21</span> ,
              <span class="modal-verse" id="Proverbs 23:29-35">23:29-35</span> ,
              <span class="modal-verse" id="Proverbs 31:4">31:4</span> ,
              <span class="modal-verse" id="Isaiah 5:22">Isaiah 5:22</span> ,
              <span class="modal-verse" id="Habakkuk 2:5">Habakkuk 2:5</span> ,
              <span class="modal-verse" id="Habakkuk 2:15">2:15</span> ,
              <span class="modal-verse" id="Luke 21:34">Luke 21:34</span> ,
              <span class="modal-verse" id="Romans 13:13">Romans 13:13</span> ,
              <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span> ,
              <span class="modal-verse" id="Galatians 5:21">Galatians 5:21</span> ,
              <span class="modal-verse" id="Ephesians 5:18">Ephesians 5:18</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:6">1 Thessalonians 5:6</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:8">5:8</span> ,
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="1 Timothy 3:11">3:11</span> ,
              <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
              <span class="modal-verse" id="Titus 2:2">2:2</span> ,
              <span class="modal-verse" id="Titus 2:4">2:4</span> ,
              <span class="modal-verse" id="Titus 2:6">2:6</span> ,
              <span class="modal-verse" id="1 Peter 1:13">1 Peter 1:13</span> ,
              <span class="modal-verse" id="1 Peter 4:7">4:7</span> ,
              <span class="modal-verse" id="1 Peter 5:8">5:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Clothing/Attire</span>
      <ul class="styled">
        <li>
          The woman shall not wear that which pertains to a man, neither shall a man put on a woman’s garment: For all who do so are an abomination unto the LORD thy God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 22:5">Deuteronomy 22:5</span> ,
              <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span>
            </li>
          </ul>
        </li>
        <li>
          Dress modestly (cheap and not flashy)
          <ul class="sub">
            <li>
              Women
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 7:10">Proverbs 7:10</span> ,
                  <span class="modal-verse" id="1 Timothy 2:9">1 Timothy 2:9</span> ,
                  <span class="modal-verse" id="1 Peter 3:3">1 Peter 3:3</span>
                </li>
              </ul>
            </li>
            <li>
              Men
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Matthew 23:5">Matthew 23:5</span> ,
                  <span class="modal-verse" id="Luke 20:46">Luke 20:46</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          With Shamefacedness (cover your nakedness)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 7:10">Proverbs 7:10</span> ,
              <span class="modal-verse" id="1 Timothy 2:9">1 Timothy 2:9</span>
            </li>
          </ul>
        </li>
        <li>
          With sobriety (dress appropriate/sensible)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 2:9">1 Timothy 2:9</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="praise">PRAISE</h3>
  <ol>
    <li>
      <span class="main-li">Praise the Lord</span>
      <ul class="styled">
        <li>
          Who: All People
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 30:4">Psalm 30:4</span> ,
              <span class="modal-verse" id="Psalm 103:1-2">103:1-2</span> ,
              <span class="modal-verse" id="Psalm 104:1">104:1</span> ,
              <span class="modal-verse" id="Psalm 117:1">117:1</span> ,
              <span class="modal-verse" id="Psalm 134:1-2">134:1-2</span> ,
              <span class="modal-verse" id="Psalm 135:1-2">135:1-2</span> ,
              <span class="modal-verse" id="Psalm 135:19-20">19-20</span> ,
              <span class="modal-verse" id="Psalm 145:21">145:21</span> ,
              <span class="modal-verse" id="Psalm 146:1-2">146:1-2</span> ,
              <span class="modal-verse" id="Psalm 148:11-13">148:11-13</span> ,
              <span class="modal-verse" id="Psalm 150:6">150:6</span>
            </li>
            <li>
              Note: God’s creation praises God by declaring His majesty
            </li>
          </ul>
        </li>
        <li>
          What: Praise the Lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 22:23">Psalm 22:23</span> ,
              <span class="modal-verse" id="Psalm 29:1-2">29:1-2</span> ,
              <span class="modal-verse" id="Psalm 40:16">40:16</span> ,
              <span class="modal-verse" id="Psalm 44:1">44:1</span> ,
              <span class="modal-verse" id="Psalm 66:8">66:8</span> ,
              <span class="modal-verse" id="Psalm 67:3">67:3</span> ,
              <span class="modal-verse" id="Psalm 67:5">67:5</span> ,
              <span class="modal-verse" id="Psalm 68:26">68:26</span> ,
              <span class="modal-verse" id="Psalm 70:4">70:4</span> ,
              <span class="modal-verse" id="Psalm 96:2">96:2</span> ,
              <span class="modal-verse" id="Psalm 96:7-8">96:7-8</span> ,
              <span class="modal-verse" id="Psalm 99:9">99:9</span> ,
              <span class="modal-verse" id="Psalm 100:4">100:4</span> ,
              <span class="modal-verse" id="Psalm 103:1-2">103:1-2</span> ,
              <span class="modal-verse" id="Psalm 103:21">103:21</span> ,
              <span class="modal-verse" id="Psalm 104:35">104:35</span> ,
              <span class="modal-verse" id="Psalm 105:45">105:45</span> ,
              <span class="modal-verse" id="Psalm 106:48">106:48</span> ,
              <span class="modal-verse" id="Psalm 107:1">107:1</span> ,
              <span class="modal-verse" id="Psalm 113:1">113:1</span> ,
              <span class="modal-verse" id="Psalm 113:9">113:9</span> ,
              <span class="modal-verse" id="Psalm 115:18">115:18</span> ,
              <span class="modal-verse" id="Psalm 116:19">116:19</span> ,
              <span class="modal-verse" id="Psalm 117:2">117:2</span> ,
              <span class="modal-verse" id="Psalm 118:1">118:1</span> ,
              <span class="modal-verse" id="Psalm 118:29">118:29</span> ,
              <span class="modal-verse" id="Psalm 135:1">135:1</span> ,
              <span class="modal-verse" id="Psalm 135:20-21">20-21</span> ,
              <span class="modal-verse" id="Psalm 146:1">146:1</span> ,
              <span class="modal-verse" id="Psalm 146:10">146:10</span> ,
              <span class="modal-verse" id="Psalm 147:1">147:1</span> ,
              <span class="modal-verse" id="Psalm 147:20">147:20</span> ,
              <span class="modal-verse" id="Psalm 148:1">148:1</span> ,
              <span class="modal-verse" id="Psalm 148:14">148:14</span> ,
              <span class="modal-verse" id="Psalm 149:1">149:1</span> ,
              <span class="modal-verse" id="Psalm 149:9">149:9</span> ,
              <span class="modal-verse" id="Psalm 150:1">150:1</span> ,
              <span class="modal-verse" id="Psalm 150:6">150:6</span> ,
              <span class="modal-verse" id="1 Chronicles 16:28-29">1 Chronicles 16:28-29</span> ,
              <span class="modal-verse" id="2 Chronicles 20:21">2 Chronicles 20:21</span> ,
              <span class="modal-verse" id="Romans 15:11">Romans 15:11</span> ,
              <span class="modal-verse" id="Revelation 14:7">Revelation 14:7</span> (glory means to boast)
            </li>
            <li>
              Glory in God
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Jeremiah 9:24">Jeremiah 9:24</span> ,
                  <span class="modal-verse" id="1 Corinthians 1:31">1 Corinthians 1:31</span> ,
                  <span class="modal-verse" id="2 Corinthians 10:17">2 Corinthians 10:17</span>
                </li>
              </ul>
            </li>
            <li>
              Not in sin
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="James 3:14">James 3:14</span>
                </li>
              </ul>
            </li>
            <li>
              Not in men
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Corinthians 3:21">1 Corinthians 3:21</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Where: In church
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 35:18">Psalm 35:18</span> ,
              <span class="modal-verse" id="Psalm 42:4">42:4</span> ,
              <span class="modal-verse" id="Psalm 99:9">99:9</span> ,
              <span class="modal-verse" id="Psalm 107:32">107:32</span> ,
              <span class="modal-verse" id="Psalm 148:1">148:1</span> ,
              <span class="modal-verse" id="Psalm 149:1">149:1</span> ,
              <span class="modal-verse" id="Psalm 150:1">150:1</span>
            </li>
            <li>
              (Sing) upon bed
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 149:5">Psalm 149:5</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          When: Every day
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 34:1">Psalm 34:1</span> ,
              <span class="modal-verse" id="Psalm 35:27-28">35:27-28</span> ,
              <span class="modal-verse" id="Psalm 145:2">145:2</span> ,
              <span class="modal-verse" id="Psalm 145:21">145:21</span> ,
              <span class="modal-verse" id="Hebrews 13:15">Hebrews 13:15</span>
            </li>
            <li>
              When you prosper/ are full
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 8:10">Deuteronomy 8:10</span>
                </li>
              </ul>
            </li>
            <li>
              When you are merry (not to sad people; loud voice/early)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 25:20">Proverbs 25:20</span> ,
                  <span class="modal-verse" id="Proverbs 27:14">27:14</span> ,
                  <span class="modal-verse" id="James 5:13">James 5:13</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          How:
          <ul class="sub">
            <li>
              With trumpet
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 98:6">Psalm 98:6</span> ,
                  <span class="modal-verse" id="Psalm 150:3">150:3</span>
                </li>
              </ul>
            </li>
            <li>
              With psaltery
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 81:2">Psalm 81:2</span> ,
                  <span class="modal-verse" id="Psalm 33:2">33:2</span> ,
                  <span class="modal-verse" id="Psalm 150:3">150:3</span>
                </li>
              </ul>
            </li>
            <li>
              With harp
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 33:2">Psalm 33:2</span> ,
                  <span class="modal-verse" id="Psalm 81:2">81:2</span> ,
                  <span class="modal-verse" id="Psalm 98:5">98:5</span> ,
                  <span class="modal-verse" id="Psalm 147:7">147:7</span> ,
                  <span class="modal-verse" id="Psalm 149:3">149:3</span> ,
                  <span class="modal-verse" id="Psalm 150:3">150:3</span>
                </li>
              </ul>
            </li>
            <li>
              With timbrel
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 81:2">Psalm 81:2</span> ,
                  <span class="modal-verse" id="Psalm 149:3">149:3</span> ,
                  <span class="modal-verse" id="Psalm 150:4">150:4</span>
                </li>
              </ul>
            </li>
            <li>
              With stringed instruments
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 150:4">Psalm 150:4</span>
                </li>
              </ul>
            </li>
            <li>
              With organs
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 150:4">Psalm 150:4</span>
                </li>
              </ul>
            </li>
            <li>
              With cornet
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 98:6">Psalm 98:6</span>
                </li>
              </ul>
            </li>
            <li>
              With loud cymbals
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 150:5">Psalm 150:5</span>
                </li>
              </ul>
            </li>
            <li>
              With high cymbals
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 150:5">Psalm 150:5</span>
                </li>
              </ul>
            </li>
            <li>
              With an instrument of 10 strings
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 33:2">Psalm 33:2</span> ,
                  <span class="modal-verse" id="Psalm 92:3">92:3</span> ,
                  <span class="modal-verse" id="Psalm 149:9">149:9</span>
                </li>
              </ul>
            </li>
            <li>
              With dance
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 149:3">Psalm 149:3</span> ,
                  <span class="modal-verse" id="Psalm 150:4">150:4</span>
                </li>
              </ul>
            </li>
            <li>
              With singing (psalms, hymns, and spiritual songs)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Chronicles 16:9">1 Chronicles 16:9</span> ,
                  <span class="modal-verse" id="1 Chronicles 16:23">16:23</span> ,
                  <span class="modal-verse" id="Psalm 9:11">Psalm 9:11</span> ,
                  <span class="modal-verse" id="Psalm 30:4">30:4</span> ,
                  <span class="modal-verse" id="Psalm 33:3">33:3</span> ,
                  <span class="modal-verse" id="Psalm 47:6-7">47:6-7</span> ,
                  <span class="modal-verse" id="Psalm 6:1-2">6:1-2</span> ,
                  <span class="modal-verse" id="Psalm 67:4">67:4</span> ,
                  <span class="modal-verse" id="Psalm 68:4">68:4</span> ,
                  <span class="modal-verse" id="Psalm 81:1-2">81:1-2</span> ,
                  <span class="modal-verse" id="Psalm 95:1-2">95:1-2</span> ,
                  <span class="modal-verse" id="Psalm 96:1-2">96:1-2</span> ,
                  <span class="modal-verse" id="Psalm 98:1">98:1</span> ,
                  <span class="modal-verse" id="Psalm 98:4">98:4</span> ,
                  <span class="modal-verse" id="Psalm 98:5">98:5</span> ,
                  <span class="modal-verse" id="Psalm 100:1-2">100:1-2</span> ,
                  <span class="modal-verse" id="Psalm 105:1-3">105:1-3</span> ,
                  <span class="modal-verse" id="Psalm 147:7">147:7</span> ,
                  <span class="modal-verse" id="Psalm 149:1">149:1</span> ,
                  <span class="modal-verse" id="Psalm 149:3">149:3</span> ,
                  <span class="modal-verse" id="Psalm 149:5-6">149:5-6</span> ,
                  <span class="modal-verse" id="Isaiah 42:10">Isaiah 42:10</span> ,
                  <span class="modal-verse" id="Zephaniah 3:14">Zephaniah 3:14</span> ,
                  <span class="modal-verse" id="Zechariah 2:10">Zechariah 2:10</span> ,
                  <span class="modal-verse" id="Ephesians 5:19">Ephesians 5:19</span> ,
                  <span class="modal-verse" id="Colossians 3:16">Colossians 3:16</span>
                </li>
              </ul>
            </li>
            <li>
              Talk of his works
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Chronicles 16:8">1 Chronicles 16:8</span> ,
                  <span class="modal-verse" id="1 Chronicles 16:9">16:9</span> ,
                  <span class="modal-verse" id="1 Chronicles 16:24">16:24</span> ,
                  <span class="modal-verse" id="Psalm 9:11">Psalm 9:11</span> ,
                  <span class="modal-verse" id="Psalm 66:3">66:3</span> ,
                  <span class="modal-verse" id="Psalm 105:1-2">105:1-2</span> ,
                  <span class="modal-verse" id="Psalm 150:2">150:2</span>
                </li>
              </ul>
            </li>
            <li>
              Say: the Lord reigneth among the heathen
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Chronicles 16:31">1 Chronicles 16:31</span> ,
                  <span class="modal-verse" id="Psalm 96:10">Psalm 96:10</span>
                </li>
              </ul>
            </li>
            <li>
              Declare his glory and wonder
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 68:4">Psalm 68:4</span> ,
                  <span class="modal-verse" id="Psalm 68:34">68:34</span> ,
                  <span class="modal-verse" id="Psalm 96:3">96:3</span>
                </li>
              </ul>
            </li>
            <li>
              Clap
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 47:1">Psalm 47:1</span>
                </li>
              </ul>
            </li>
            <li>
              Play skillfully
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 33:3">Psalm 33:3</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    <li>
      <span class="main-li">Don’t praise yourself</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 20:6">Proverbs 20:6</span> ,
          <span class="modal-verse" id="Proverbs 25:14">25:14</span> ,
          <span class="modal-verse" id="Proverbs 27:2">27:2</span> ,
          <span class="modal-verse" id="Proverbs 30:32">30:32</span> ,
          <span class="modal-verse" id="Jeremiah 9:23">Jeremiah 9:23</span> ,
          <span class="modal-verse" id="1 Corinthians 1:29">1 Corinthians 1:29</span> ,
          <span class="modal-verse" id="2 Corinthians 11:16">2 Corinthians 11:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Flattery (insincere praise)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 12:2-3">Psalm 12:2-3</span> ,
          <span class="modal-verse" id="Proverbs 26:23-26">Proverbs 26:23-26</span> ,
          <span class="modal-verse" id="Proverbs 26:28">26:28</span> ,
          <span class="modal-verse" id="Proverbs 27:6">27:6</span> ,
          <span class="modal-verse" id="Proverbs 28:23">28:23</span> ,
          <span class="modal-verse" id="Proverbs 29:5">29:5</span> ,
          <span class="modal-verse" id="1 John 3:18">1 John 3:18</span>
        </li>
      </ul>
    </li>
    </li>
  </ol>
  <h3 id="prayer">PRAYER</h3>
  <ol>
    <li>
      <span class="main-li">Commanded to pray (ask, seek and knock) for everything we care about</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/6_Types_Of_Prayer.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: 6 types of prayer</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Chronicles 16:8">2 Chronicles 16:8</span> ,
          <span class="modal-verse" id="Psalm 50:15">Psalm 50:15</span> ,
          <span class="modal-verse" id="Psalm 55:22">55:22</span> ,
          <span class="modal-verse" id="Psalm 62:8">62:8</span> ,
          <span class="modal-verse" id="Psalm 105:1">105:1</span> ,
          <span class="modal-verse" id="Matthew 7:7">Matthew 7:7</span> ,
          <span class="modal-verse" id="Luke 11:9">Luke 11:9</span> ,
          <span class="modal-verse" id="Philippians 4:6">Philippians 4:6</span> ,
          <span class="modal-verse" id="James 4:2">James 4:2</span> ,
          <span class="modal-verse" id="James 5:13">5:13</span> ,
          <span class="modal-verse" id="Hebrews 4:16">Hebrews 4:16</span> ,
          <span class="modal-verse" id="1 Peter 4:7">1 Peter 4:7</span> ,
          <span class="modal-verse" id="1 Peter 5:7">5:7</span>
        </li>
        <li>
          Note: lifting up hands is an expression of pleading
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 134:2">Psalm 134:2</span> ,
              <span class="modal-verse" id="Lamentations 3:41">Lamentations 3:41</span> ,
              <span class="modal-verse" id="1 Timothy 2:8">1 Timothy 2:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray without ceasing</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Samuel 12:23">1 Samuel 12:23</span> ,
          <span class="modal-verse" id="Luke 11:5-8">Luke 11:5-8</span> ,
          <span class="modal-verse" id="Luke 18:1-8">18:1-8</span> ,
          <span class="modal-verse" id="Romans 12:12">Romans 12:12</span> ,
          <span class="modal-verse" id="Ephesians 6:18">Ephesians 6:18</span> ,
          <span class="modal-verse" id="Colossians 4:2">Colossians 4:2</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:17">1 Thessalonians 5:17</span> ,
          <span class="modal-verse" id="James 5:16-18">James 5:16-18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Long prayers are done in private; public prayer is only short</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 2:8">1 Timothy 2:8</span> ,
          <span class="modal-verse" id="Matthew 6:5-8">Matthew 6:5-8</span> ,
          <span class="modal-verse" id="Matthew 14:23">14:23</span> ,
          <span class="modal-verse" id="Matthew 23:14">23:14</span> ,
          <span class="modal-verse" id="Mark 1:35">Mark 1:35</span> ,
          <span class="modal-verse" id="Mark 6:46">6:46</span> ,
          <span class="modal-verse" id="Mark 12:40">12:40</span> ,
          <span class="modal-verse" id="Luke 6:12">Luke 6:12</span> ,
          <span class="modal-verse" id="Luke 20:47">20:47</span> ,
          <span class="modal-verse" id="Matthew 18:19-20">Matthew 18:19-20</span> ,
          <span class="modal-verse" id="Matthew 21:13">21:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t pray for show</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 6:5-6">Matthew 6:5-6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Use not vain repetitions as the heathens do (chants)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 6:7-8">Matthew 6:7-8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Ask in faith (nothing wavering)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 11:22-24">Mark 11:22-24</span> ,
          <span class="modal-verse" id="1 Timothy 2:8">1 Timothy 2:8</span> ,
          <span class="modal-verse" id="Hebrews 4:16">Hebrews 4:16</span> ,
          <span class="modal-verse" id="James 1:6-7">James 1:6-7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take the Lord’s prayer as an example/model prayer</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 6:9">Matthew 6:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Ask in Jesus’ Name</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="John 16:24">John 16:24</span> ,
          <span class="modal-verse" id="James 4:3">James 4:3</span> ,
          <span class="modal-verse" id="1 John 5:14-15">1 John 5:14-15</span> (in him)
        </li>
        <li>
          Means to ask according to God’s will; on Jesus’ behalf/authority
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray in the Holy Ghost</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 6:18">Ephesians 6:18</span> ,
          <span class="modal-verse" id="Jude 1:20">Jude 1:20</span>
        </li>
        <li>
          The Holy Ghost’s role in our prayers
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 8:26-27">Romans 8:26-27</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray with thanksgiving</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Philippians 4:6">Philippians 4:6</span> ,
          <span class="modal-verse" id="Colossians 4:2">Colossians 4:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Things commanded to ask for</span>
      <ul class="styled">
        <li>
          Wisdom
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:5">James 1:5</span> ,
              <span class="modal-verse" id="Proverbs 3:15">Proverbs 3:15</span> ,
              <span class="modal-verse" id="Proverbs 8:11">8:11</span> ,
              <span class="modal-verse" id="2 Chronicles 1:10-12">2 Chronicles 1:10-12</span> ,
              <span class="modal-verse" id="1 Kings 3:5">1 Kings 3:5</span> ,
              <span class="modal-verse" id="1 Kings 3:9-14">1 Kings 3:9-14</span>
            </li>
          </ul>
        </li>
        <li>
          Forgiveness: forsake & confess your sins to God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:5">Leviticus 5:5</span> ,
              <span class="modal-verse" id="Leviticus 26:40-41">26:40-41</span> ,
              <span class="modal-verse" id="Numbers 5:7">Numbers 5:7</span> ,
              <span class="modal-verse" id="Job 31:33">Job 31:33</span> ,
              <span class="modal-verse" id="Psalm 51">Psalm 51</span> ,
              <span class="modal-verse" id="Proverbs 28:13">Proverbs 28:13</span> ,
              <span class="modal-verse" id="Jeremiah 3:13">Jeremiah 3:13</span> ,
              <span class="modal-verse" id="Hosea 14:1-2">Hosea 14:1-2</span> ,
              <span class="modal-verse" id="Joel 2:12-13">Joel 2:12-13</span> ,
              <span class="modal-verse" id="Matthew 6:12">Matthew 6:12</span> ,
              <span class="modal-verse" id="Mark 11:25">Mark 11:25</span> ,
              <span class="modal-verse" id="Luke 11:4">Luke 11:4</span> ,
              <span class="modal-verse" id="1 John 1:9">1 John 1:9</span>
            </li>
          </ul>
        </li>
        <li>
          That I enter not into temptation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 6:13">Matthew 6:13</span> ,
              <span class="modal-verse" id="Matthew 26:41">26:41</span> ,
              <span class="modal-verse" id="Mark 14:38">Mark 14:38</span> ,
              <span class="modal-verse" id="Luke 11:4">Luke 11:4</span> ,
              <span class="modal-verse" id="Luke 22:40">22:40</span> ,
              <span class="modal-verse" id="Luke 22:46">22:46</span> ,
              <span class="modal-verse" id="1 Chronicles 4:10">1 Chronicles 4:10</span> ,
              <span class="modal-verse" id="James 1:12-15">James 1:12-15</span>
            </li>
          </ul>
        </li>
        <li>
          That I might be accounted worthy to escape all these things (snares laid upon a believer for the cares of this life) that shall come to pass, and to stand before Jesus
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 21:36">Luke 21:36</span>
            </li>
          </ul>
        </li>
        <li>
          More soul winners
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 9:38">Matthew 9:38</span> ,
              <span class="modal-verse" id="Luke 10:2">Luke 10:2</span> ,
              <span class="modal-verse" id="Ephesians 6:19">Ephesians 6:19</span> ,
              <span class="modal-verse" id="Colossians 4:3-4">Colossians 4:3-4</span> ,
              <span class="modal-verse" id="2 Thessalonians 3:1-2">2 Thessalonians 3:1-2</span>
            </li>
          </ul>
        </li>
        <li>
          All men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 2:1">1 Timothy 2:1</span>
            </li>
          </ul>
        </li>
        <li>
          Brethren (intercession)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 6:18">Ephesians 6:18</span> ,
              <span class="modal-verse" id="Hebrews 13:18">Hebrews 13:18</span> ,
              <span class="modal-verse" id="James 5:16">James 5:16</span> ,
              <span class="modal-verse" id="1 John 5:16">1 John 5:16</span>
            </li>
          </ul>
        </li>
        <li>
          Health
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 5:14">James 5:14</span> ,
              <span class="modal-verse" id="James 5:16">James 5:16</span>
            </li>
          </ul>
        </li>
        <li>
          For kings and those in authority (to live a quiet and peaceable life)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 29:7">Jeremiah 29:7</span> ,
              <span class="modal-verse" id="1 Timothy 2:2">1 Timothy 2:2</span>
            </li>
          </ul>
        </li>
        <li>
          For your enemies
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:44">Matthew 5:44</span> ,
              <span class="modal-verse" id="Luke 6:28">Luke 6:28</span>
            </li>
          </ul>
        </li>
        <li>
          Who not to pray for
          <ul class="sub">
            <li>
              The exceeding wicked
            </li>
            <li>
              <span class="modal-verse" id="Jeremiah 7:16">Jeremiah 7:16</span> ,
              <span class="modal-verse" id="Jeremiah 11:14">Jeremiah 11:14</span> ,
              <span class="modal-verse" id="Jeremiah 14:11">Jeremiah 14:11</span> ,
              <span class="modal-verse" id="1 John 5:16">1 John 5:16</span> ,
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="prevention-of-sin">PREVENTION OF SIN</h3>
  <ol>
    <li>
      <span class="main-li">Cut off/avoid that which causes you to commit sin: Make not provision for the flesh, to fulfill the lust thereof; eschew (avoid) evil, flee fornication and idolatry, be circumspect, vigilant of stumbling blocks</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 4:14-15">Proverbs 4:14-15</span> ,
          <span class="modal-verse" id="Proverbs 22:3">22:3</span> ,
          <span class="modal-verse" id="Ezekiel 14:3-4">Ezekiel 14:3-4</span> ,
          <span class="modal-verse" id="Romans 13:14">Romans 13:14</span> ,
          <span class="modal-verse" id="1 Corinthians 10:12">1 Corinthians 10:12</span> ,
          <span class="modal-verse" id="Galatians 6:1">Galatians 6:1</span> ,
          <span class="modal-verse" id="Job 1:1">Job 1:1</span> ,
          <span class="modal-verse" id="Job 1:8">1:8</span> ,
          <span class="modal-verse" id="1 Peter 3:11">1 Peter 3:11</span> ,
          <span class="modal-verse" id="1 Peter 5:9">5:9</span> ,
          <span class="modal-verse" id="Exodus 23:13">Exodus 23:13</span> ,
          <span class="modal-verse" id="Ephesians 4:27">Ephesians 4:27</span> ,
          <span class="modal-verse" id="Ephesians 5:15">5:15</span> ,
          <span class="modal-verse" id="Hebrews 12:1">Hebrews 12:1</span> (weight),
          <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span> (watch),
          <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
          <span class="modal-verse" id="1 Peter 5:8">1 Peter 5:8</span>
        </li>
        <li>
          Note: if thine right hand offend thee, cut it off, and cast it from thee (means to remove that which causes you to sin)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:29-30">Matthew 5:29-30</span> ,
              <span class="modal-verse" id="Matthew 18:8-9">18:8-9</span> ,
              <span class="modal-verse" id="Mark 9:43">Mark 9:43</span> ,
              <span class="modal-verse" id="Mark 9:45">9:45</span> ,
              <span class="modal-verse" id="Mark 9:47">9:47</span> ,
              <span class="modal-verse" id="2 Timothy 2:20-21">2 Timothy 2:20-21</span>
            </li>
            <li>
              <span class="modal-verse" id="Job 31:1">Job 31:1</span> ,
              <span class="modal-verse" id="Psalm 11:5">Psalm 11:5</span> ,
              <span class="modal-verse" id="Psalm 101:3">101:3</span> ,
              <span class="modal-verse" id="Proverbs 23:31">Proverbs 23:31</span>
            </li>
            <li>
              Examples: throw out TV/video-games, block distracting websites, remove alcohol/drugs from house, etc.
            </li>
            <li>
              I will set no wicked thing before my eyes (guard your eyes and your ears)
            </li>
            <li>
              Put on the whole armor of God
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Ephesians 6:11">Ephesians 6:11</span> ,
                  <span class="modal-verse" id="Ephesians 6:13">6:13</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t cause others to stumble/sin</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 10:32">1 Corinthians 10:32</span> ,
          <span class="modal-verse" id="2 Corinthians 6:3">2 Corinthians 6:3</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="protection-from-harm">Protection from harm</h3>
  <ol>
    <li>
      <span class="main-li">Protect others</span>
      <ul class="styled">
        <li>
          Physical
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:16">Leviticus 19:16</span> ,
              <span class="modal-verse" id="Proverbs 3:3">Proverbs 3:3</span> ,
              <span class="modal-verse" id="Proverbs 24:11-12">24:11-12</span> ,
              <span class="modal-verse" id="Luke 10:37">Luke 10:37</span>
            </li>
          </ul>
        <li>
          Spiritual (watchman)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 3:3">Proverbs 3:3</span> ,
              <span class="modal-verse" id="Proverbs 12:6">12:6</span> ,
              <span class="modal-verse" id="Ezekiel 3:17-21">Ezekiel 3:17-21</span> ,
              <span class="modal-verse" id="Ezekiel 33:2-9">33:2-9</span> ,
              <span class="modal-verse" id="Acts 20:26">Acts 20:26</span>
            </li>
          </ul>
        </li>
    </li>
    </ul>
    <li>
      Beware of false prophets, wicked people, scribes, the concision
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 7:15">Matthew 7:15</span> ,
          <span class="modal-verse" id="Matthew 10:17">10:17</span> ,
          <span class="modal-verse" id="Mark 12:38">Mark 12:38</span> ,
          <span class="modal-verse" id="Mark 13:9">13:9</span> ,
          <span class="modal-verse" id="Luke 20:46">Luke 20:46</span> ,
          <span class="modal-verse" id="Philippians 3:2">Philippians 3:2</span>
        </li>
      </ul>
    </li>
    <li>
      Try the spirits whether they are of God (test them)
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 John 4:1">1 John 4:1</span> ,
          <span class="modal-verse" id="Revelation 2:2">Revelation 2:2</span>
        </li>
      </ul>
    </li>
    <li>
      Do not be deceived and don’t hearken unto false prophets
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 13:3">Deuteronomy 13:3</span> ,
          <span class="modal-verse" id="Deuteronomy 13:8">13:8</span> ,
          <span class="modal-verse" id="Matthew 16:6">Matthew 16:6</span> ,
          <span class="modal-verse" id="1 Corinthians 15:33">1 Corinthians 15:33</span> ,
          <span class="modal-verse" id="Colossians 2:8">Colossians 2:8</span> ,
          <span class="modal-verse" id="Titus 2:7">Titus 2:7</span> ,
          <span class="modal-verse" id="Hebrews 13:9">Hebrews 13:9</span> ,
          <span class="modal-verse" id="1 John 3:7">1 John 3:7</span> ,
          <span class="modal-verse" id="2 John 1:8">2 John 1:8</span>
        </li>
      </ul>
    </li>
    <li>
      Thou shalt not follow a multitude to do evil
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:2">Exodus 23:2</span> ,
          <span class="modal-verse" id="Proverbs 1:10">Proverbs 1:10</span> ,
          <span class="modal-verse" id="Proverbs 1:15">1:15</span>
        </li>
      </ul>
    </li>
    </li>
  </ol>
  <h3 id="rewards-in-heaven">Rewards in Heaven</h3>
  <ol>
    <li>
      <span class="main-li">Lay up for yourselves treasures in heaven</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 13:7">Proverbs 13:7</span> ,
          <span class="modal-verse" id="Matthew 6:20">Matthew 6:20</span> ,
          <span class="modal-verse" id="1 Timothy 6:12">1 Timothy 6:12</span> ,
          <span class="modal-verse" id="1 Timothy 6:19">6:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Run that ye may obtain</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 9:24">1 Corinthians 9:24</span> ,
          <span class="modal-verse" id="Philippians 3:15">Philippians 3:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Judge nothing before the time</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 4:5">1 Corinthians 4:5</span> ,
          <span class="modal-verse" id="2 Corinthians 10:12">2 Corinthians 10:12</span>
        </li>
        <li>
          Means to not compare yourself with other believers to see who the greater or better Christian is
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lay aside every weight</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Hebrews 12:1">Hebrews 12:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Run with patience</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Hebrews 12:1">Hebrews 12:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fight the Good fight</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 1:18">1 Timothy 1:18</span> ,
          <span class="modal-verse" id="1 Timothy 6:12">6:12</span> ,
          <span class="modal-verse" id="1 Peter 1:13">1 Peter 1:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Hope to the end</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Peter 1:13">1 Peter 1:13</span> ,
          <span class="modal-verse" id="1 Peter 4:19">4:19</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="righteous-appearance">Righteous Appearance</h3>
  <ol>
    <li>
      <span class="main-li">Abstain from all appearance of evil; be blameless; have a good name</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Thessalonians 5:22">1 Thessalonians 5:22</span> ,
          <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
          <span class="modal-verse" id="1 Timothy 3:7">3:7</span> ,
          <span class="modal-verse" id="1 Timothy 5:7">5:7</span> ,
          <span class="modal-verse" id="Titus 1:6-7">Titus 1:6-7</span> ,
          <span class="modal-verse" id="2 Peter 3:14">2 Peter 3:14</span> ,
          <span class="modal-verse" id="Proverbs 22:1">Proverbs 22:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Let your light so shine before men</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:16">Matthew 5:16</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="sexual-sins">SEXUAL SINS</h3>
  <ol>
    <li>
      <span class="main-li">Fornication</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:17">Deuteronomy 23:17</span> ,
          <span class="modal-verse" id="Ezekiel 22:9">Ezekiel 22:9</span> ,
          <span class="modal-verse" id="Mark 7:21">Mark 7:21</span> ,
          <span class="modal-verse" id="Acts 15:20">Acts 15:20</span> ,
          <span class="modal-verse" id="Acts 15:29">15:29</span> ,
          <span class="modal-verse" id="Acts 21:25">21:25</span> ,
          <span class="modal-verse" id="Romans 13:13">Romans 13:13</span> ,
          <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
          <span class="modal-verse" id="1 Corinthians 6:15">6:15</span> ,
          <span class="modal-verse" id="1 Corinthians 6:18">6:18</span> ,
          <span class="modal-verse" id="1 Corinthians 6:20">6:20</span> ,
          <span class="modal-verse" id="1 Corinthians 10:8">10:8</span> ,
          <span class="modal-verse" id="Colossians 3:5">Colossians 3:5</span> ,
          <span class="modal-verse" id="Galatians 5:19">Galatians 5:19</span> ,
          <span class="modal-verse" id="Ephesians 5:3">Ephesians 5:3</span> ,
          <span class="modal-verse" id="1 Thessalonians 4:3">1 Thessalonians 4:3</span> ,
          <span class="modal-verse" id="1 Timothy 1:10">1 Timothy 1:10</span> ,
          <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
          <span class="modal-verse" id="Hebrews 13:4">Hebrews 13:4</span> ,
          <span class="modal-verse" id="Leviticus 19:29">Leviticus 19:29</span> (includes prostitution)
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Adultery</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:14">Exodus 20:14</span> ,
          <span class="modal-verse" id="Leviticus 18:20">Leviticus 18:20</span> ,
          <span class="modal-verse" id="Deuteronomy 5:18">Deuteronomy 5:18</span> ,
          <span class="modal-verse" id="Proverbs 5:8">Proverbs 5:8</span> ,
          <span class="modal-verse" id="Proverbs 6:24">6:24</span> ,
          <span class="modal-verse" id="Proverbs 7:24-27">7:24-27</span> ,
          <span class="modal-verse" id="Proverbs 31:3">31:3</span> ,
          <span class="modal-verse" id="Ezekiel 18:6">Ezekiel 18:6</span> ,
          <span class="modal-verse" id="Ezekiel 22:11">22:11</span> ,
          <span class="modal-verse" id="Matthew 19:18">Matthew 19:18</span> ,
          <span class="modal-verse" id="Mark 7:21">Mark 7:21</span> ,
          <span class="modal-verse" id="Mark 10:19">10:19</span> ,
          <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
          <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
          <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
          <span class="modal-verse" id="Galatians 5:19">Galatians 5:19</span> ,
          <span class="modal-verse" id="Hebrews 13:4">Hebrews 13:4</span> ,
          <span class="modal-verse" id="James 2:11">James 2:11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sodomy</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/AIDS_The_Judgement_Of_God.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: aids: the judgment of god</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 18:22">Leviticus 18:22</span> ,
          <span class="modal-verse" id="Deuteronomy 23:17">Deuteronomy 23:17</span> ,
          <span class="modal-verse" id="Habakkuk 2:15">Habakkuk 2:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Bestiality</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 18:23">Leviticus 18:23</span> ,
          <span class="modal-verse" id="Deuteronomy 27:21">Deuteronomy 27:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Incest</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 18:6">Leviticus 18:6</span> ,
          <span class="modal-verse" id="Leviticus 18:7-16">18:7-16</span> ,
          <span class="modal-verse" id="Leviticus 20:11-13">20:11-13</span> ,
          <span class="modal-verse" id="Leviticus 20:14">20:14</span> ,
          <span class="modal-verse" id="Leviticus 20:17">20:17</span> ,
          <span class="modal-verse" id="Leviticus 20:19-21">20:19-21</span> ,
          <span class="modal-verse" id="Leviticus 21:2-3">21:2-3</span> ,
          <span class="modal-verse" id="Leviticus 25:49">25:49</span> ,
          <span class="modal-verse" id="Deuteronomy 22:30">Deuteronomy 22:30</span> ,
          <span class="modal-verse" id="Deuteronomy 27:22">27:22</span> ,
          <span class="modal-verse" id="Deuteronomy 27:23">27:23</span> ,
          <span class="modal-verse" id="Deuteronomy 27:20">27:20</span> ,
          <span class="modal-verse" id="Ezekiel 22:10-11">Ezekiel 22:10-11</span>
        </li>
        <li>
          Close relative of past/present relationship prohibited
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 18:17-18">Leviticus 18:17-18</span> ,
              <span class="modal-verse" id="Amos 2:7">Amos 2:7</span> ,
              <span class="modal-verse" id="1 Corinthians 5:1">1 Corinthians 5:1</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Forcing Someone (rape)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Samuel 13:12">2 Samuel 13:12</span> ,
          <span class="modal-verse" id="1 Corinthians 7:36">1 Corinthians 7:36</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="speech">speech</h3>
  <ol>
    <li>
      <span class="main-li">preaching</span>
      <ul class="styled">
        <li>
          Preach and Teach the Bible; disperse knowledge (in general)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 10:11">Proverbs 10:11</span> ,
              <span class="modal-verse" id="Proverbs 10:13">10:13</span> ,
              <span class="modal-verse" id="Proverbs 10:14">10:14</span> ,
              <span class="modal-verse" id="Proverbs 10:21">10:21</span> ,
              <span class="modal-verse" id="Proverbs 10:31-32">10:31-32</span> ,
              <span class="modal-verse" id="Proverbs 12:23">12:23</span> ,
              <span class="modal-verse" id="Proverbs 15:2">15:2</span> ,
              <span class="modal-verse" id="Proverbs 15:7">15:7</span> ,
              <span class="modal-verse" id="Proverbs 15:14">15:14</span> ,
              <span class="modal-verse" id="Proverbs 15:28">15:28</span> ,
              <span class="modal-verse" id="Proverbs 16:23">16:23</span> ,
              <span class="modal-verse" id="Proverbs 20:15">20:15</span> ,
              <span class="modal-verse" id="Proverbs 23:16">23:16</span> ,
              <span class="modal-verse" id="Proverbs 24:26">24:26</span> ,
              <span class="modal-verse" id="Proverbs 25:11-12">25:11-12</span> ,
              <span class="modal-verse" id="Proverbs 31:26">31:26</span> ,
              <span class="modal-verse" id="Ezekiel 3:1">Ezekiel 3:1</span> ,
              <span class="modal-verse" id="2 Timothy 1:6">2 Timothy 1:6</span> ,
              <span class="modal-verse" id="2 Timothy 1:13-14">1:13-14</span> ,
              <span class="modal-verse" id="2 Timothy 4:2">4:2</span> ,
              <span class="modal-verse" id="Titus 2:3">Titus 2:3</span> ,
              <span class="modal-verse" id="1 Peter 4:11">1 Peter 4:11</span>
            </li>
          </ul>
        </li>
        <li>
          Desire to preach
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 12:31">1 Corinthians 12:31</span> ,
              <span class="modal-verse" id="1 Corinthians 14:1">1 Corinthians 14:1</span> ,
              <span class="modal-verse" id="1 Corinthians 14:12">14:12</span> ,
              <span class="modal-verse" id="1 Corinthians 14:39">14:39</span>
            </li>
          </ul>
        </li>
        <li>
          Be apt (prepared; ready; willing) to teach
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="2 Timothy 2:24">2 Timothy 2:24</span> ,
              <span class="modal-verse" id="2 Timothy 4:2">4:2</span> (instant)
            </li>
          </ul>
        </li>
        <li>
          Bring things old and new
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 13:52">Matthew 13:52</span>
            </li>
          </ul>
        </li>
        <li>
          Lean on those who taught you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 1:9">Titus 1:9</span> (as he hath been taught)
            </li>
          </ul>
        </li>
        <li>
          Diminish not a word (preach the whole Bible; don’t omit)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 26:2">Jeremiah 26:2</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t teach the commandments of men as bible doctrine
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 15:9">Matthew 15:9</span> ,
              <span class="modal-verse" id="Mark 7:7">Mark 7:7</span> ,
              <span class="modal-verse" id="1 Corinthians 14:39">1 Corinthians 14:39</span> ,
              <span class="modal-verse" id="1 Timothy 1:3">1 Timothy 1:3</span> ,
              <span class="modal-verse" id="Titus 1:14">Titus 1:14</span> ,
              <span class="modal-verse" id="James 4:11-12">James 4:11-12</span>
            </li>
            <li>
              sound doctrine
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Titus 2:7-8">Titus 2:7-8</span> ,
                  <span class="modal-verse" id="Ephesians 4:29">Ephesians 4:29</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Clear speech and preaching: speak words easy to be understood
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Habakkuk 2:2">Habakkuk 2:2</span> ,
              <span class="modal-verse" id="1 Corinthians 14:9">1 Corinthians 14:9</span> ,
              <span class="modal-verse" id="2 Corinthians 3:12">2 Corinthians 3:12</span>
            </li>
          </ul>
        </li>
        <li>
          Rightly dividing the word of truth
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Timothy 2:15">2 Timothy 2:15</span> ,
              <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span> (heresy)
            </li>
            <li>
              Teaching Tip: line upon line and precept on precept
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Isaiah 28:9-10">Isaiah 28:9-10</span> ,
                  <span class="modal-verse" id="Isaiah 28:13">28:13</span> ,
                  <span class="modal-verse" id="1 Corinthians 2:13">1 Corinthians 2:13</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Preach publicly (places with many listeners)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 10:21">Proverbs 10:21</span> ,
              <span class="modal-verse" id="Matthew 5:14-16">Matthew 5:14-16</span> ,
              <span class="modal-verse" id="Matthew 10:27">10:27</span> ,
              <span class="modal-verse" id="Luke 12:3">Luke 12:3</span>
            </li>
          </ul>
        </li>
        <li>
          Speak with all authority (assertiveness)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 7:28-29">Matthew 7:28-29</span> ,
              <span class="modal-verse" id="Mark 1:22">Mark 1:22</span> ,
              <span class="modal-verse" id="Luke 4:32">Luke 4:32</span> ,
              <span class="modal-verse" id="Acts 4:31">Acts 4:31</span> ,
              <span class="modal-verse" id="Ephesians 6:20">Ephesians 6:20</span> ,
              <span class="modal-verse" id="1 Timothy 4:11">1 Timothy 4:11</span> ,
              <span class="modal-verse" id="Titus 2:15">Titus 2:15</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t judge when you are not within your authority to
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 30:10">Proverbs 30:10</span> ,
              <span class="modal-verse" id="Isaiah 45:9-10">Isaiah 45:9-10</span> ,
              <span class="modal-verse" id="Hosea 4:4">Hosea 4:4</span> ,
              <span class="modal-verse" id="Luke 12:14">Luke 12:14</span> ,
              <span class="modal-verse" id="Romans 9:20-21">Romans 9:20-21</span> ,
              <span class="modal-verse" id="Romans 14:4">14:4</span> ,
              <span class="modal-verse" id="1 Corinthians 5:12">1 Corinthians 5:12</span> ,
              <span class="modal-verse" id="1 Timothy 4:11">1 Timothy 4:11</span> ,
              <span class="modal-verse" id="1 Timothy 5:1">5:1</span>
            </li>
            <li>
              women don’t speak in the church, master>servant, parent>child, pastor>congregation, God>whosoever
            </li>
          </ul>
        </li>
        <li>
          Be an example: don’t judge as a hypocrite
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 11:9">Proverbs 11:9</span> ,
              <span class="modal-verse" id="Matthew 7:1-5">Matthew 7:1-5</span> ,
              <span class="modal-verse" id="Luke 6:37">Luke 6:37</span> ,
              <span class="modal-verse" id="Luke 6:41-42">6:41-42</span> ,
              <span class="modal-verse" id="Luke 12:1-3">12:1-3</span> ,
              <span class="modal-verse" id="Luke 13:15">13:15</span> ,
              <span class="modal-verse" id="Romans 2:1-6">Romans 2:1-6</span> ,
              <span class="modal-verse" id="Romans 2:17-23">2:17-23</span> ,
              <span class="modal-verse" id="1 Timothy 4:2">1 Timothy 4:2</span> ,
              <span class="modal-verse" id="1 Timothy 4:11-12">4:11-12</span> ,
              <span class="modal-verse" id="1 Timothy 4:16">4:16</span> ,
              <span class="modal-verse" id="Titus 2:7">Titus 2:7</span> (pattern),
              <span class="modal-verse" id="1 Peter 2:1">1 Peter 2:1</span> ,
              <span class="modal-verse" id="1 Peter 5:3">5:3</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Evangelism</span>
      <ul class="styled">
        <li>
          Go ye into all the world, and preach the gospel to every creature
          <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/A_Strategy_To_Evangelize_The_Entire_World.mp4">
            <div class="tooltip">
              <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
              <span class="tooltiptext">sermon: a strategy to evangelize the entire world</span>
            </div>
          </a>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 71:15-16">Psalm 71:15-16</span> ,
              <span class="modal-verse" id="Proverbs 11:30">Proverbs 11:30</span> ,
              <span class="modal-verse" id="Proverbs 14:25">14:25</span> ,
              <span class="modal-verse" id="Proverbs 15:24">15:24</span> ,
              <span class="modal-verse" id="Matthew 10:7">Matthew 10:7</span> ,
              <span class="modal-verse" id="Matthew 28:19">28:19</span> ,
              <span class="modal-verse" id="Mark 16:15">Mark 16:15</span> ,
              <span class="modal-verse" id="Luke 9:60">Luke 9:60</span> ,
              <span class="modal-verse" id="Luke 10:3">10:3</span> ,
              <span class="modal-verse" id="Luke 10:9">10:9</span> ,
              <span class="modal-verse" id="Luke 24:47">24:47</span> ,
              <span class="modal-verse" id="Acts 10:42-43">Acts 10:42-43</span> ,
              <span class="modal-verse" id="Ephesians 6:15">Ephesians 6:15</span> ,
              <span class="modal-verse" id="Philippians 1:27">Philippians 1:27</span> ,
              <span class="modal-verse" id="Philippians 2:16">2:16</span> ,
              <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span> ,
              <span class="modal-verse" id="Titus 2:1">Titus 2:1</span> ,
              <span class="modal-verse" id="Titus 2:7-8">2:7-8</span> ,
              <span class="modal-verse" id="1 Peter 4:10">1 Peter 4:10</span> ,
              <span class="modal-verse" id="Jude 1:22-23">Jude 1:22-23</span>
            </li>
          </ul>
        </li>
        <li>
          Shake off the dust of your feet (to whoever doesn’t hear you)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 10:14">Matthew 10:14</span> ,
              <span class="modal-verse" id="Mark 6:11">Mark 6:11</span> ,
              <span class="modal-verse" id="Luke 9:5">Luke 9:5</span> ,
              <span class="modal-verse" id="Luke 10:10-12">Luke 10:10-12</span>
            </li>
          </ul>
        </li>
        <li>
          When they persecute you in one city flee to another (continue preaching)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 10:23">Matthew 10:23</span>
            </li>
          </ul>
        </li>
        <li>
          Show forth his salvation from day to day (often/routinely)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Chronicles 16:23">1 Chronicles 16:23</span> ,
              <span class="modal-verse" id="Psalm 96:2">Psalm 96:2</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Edifying</span>
      <ul class="styled">
        <li>
          Teach God’s commandments to other believers
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:20">Exodus 18:20</span> ,
              <span class="modal-verse" id="Exodus 21:1">21:1</span> ,
              <span class="modal-verse" id="Leviticus 19:17">Leviticus 19:17</span> ,
              <span class="modal-verse" id="Deuteronomy 4:14">Deuteronomy 4:14</span> ,
              <span class="modal-verse" id="Psalm 37:30-31">Psalm 37:30-31</span> ,
              <span class="modal-verse" id="Ecclesiastes 12:9">Ecclesiastes 12:9</span> ,
              <span class="modal-verse" id="Ezekiel 34:2-3">Ezekiel 34:2-3</span> ,
              <span class="modal-verse" id="Malachi 2:6">Malachi 2:6</span> ,
              <span class="modal-verse" id="Matthew 5:19">Matthew 5:19</span> ,
              <span class="modal-verse" id="Matthew 28:20">28:20</span> ,
              <span class="modal-verse" id="John 21:15-17">John 21:15-17</span> ,
              <span class="modal-verse" id="Acts 20:28">Acts 20:28</span> ,
              <span class="modal-verse" id="Romans 12:6">Romans 12:6</span> ,
              <span class="modal-verse" id="1 Corinthians 2:15">1 Corinthians 2:15</span> ,
              <span class="modal-verse" id="Ephesians 4:12">Ephesians 4:12</span> ,
              <span class="modal-verse" id="Ephesians 4:15-16">4:15-16</span> ,
              <span class="modal-verse" id="Ephesians 4:29">4:29</span> ,
              <span class="modal-verse" id="Ephesians 5:11">5:11</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:11">1 Thessalonians 5:11</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:14">5:14</span> ,
              <span class="modal-verse" id="1 Timothy 4:6">1 Timothy 4:6</span> ,
              <span class="modal-verse" id="1 Timothy 4:11">4:11</span> ,
              <span class="modal-verse" id="1 Timothy 4:13-14">4:13-14</span> ,
              <span class="modal-verse" id="1 Timothy 4:16">4:16</span> ,
              <span class="modal-verse" id="1 Timothy 6:2">6:2</span> ,
              <span class="modal-verse" id="2 Timothy 4:2">2 Timothy 4:2</span> ,
              <span class="modal-verse" id="Titus 2:1">Titus 2:1</span> ,
              <span class="modal-verse" id="Titus 2:15">2:15</span> ,
              <span class="modal-verse" id="Titus 3:8">3:8</span> ,
              <span class="modal-verse" id="Hebrews 10:24-25">Hebrews 10:24-25</span> ,
              <span class="modal-verse" id="James 5:19-20">James 5:19-20</span> ,
              <span class="modal-verse" id="1 Peter 5:2">1 Peter 5:2</span> (pastors)
            </li>
          </ul>
        </li>
        <li>
          If your brother sins against you, rebuke him (between you and him alone: not publicly)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:15">Matthew 18:15</span> ,
              <span class="modal-verse" id="Luke 17:3-4">Luke 17:3-4</span> ,
              <span class="modal-verse" id="Leviticus 19:17">Leviticus 19:17</span> ,
              <span class="modal-verse" id="Proverbs 25:9-10">Proverbs 25:9-10</span> ,
              <span class="modal-verse" id="Proverbs 27:5">27:5</span> ,
              <span class="modal-verse" id="Proverbs 28:23">28:23</span>
            </li>
          </ul>
        </li>
        <li>
          Entreat and admonish brethren when they sin in general
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 6:1">Galatians 6:1</span> ,
              <span class="modal-verse" id="2 Thessalonians 3:15">2 Thessalonians 3:15</span> ,
              <span class="modal-verse" id="1 Timothy 5:1-2">1 Timothy 5:1-2</span> ,
              <span class="modal-verse" id="2 Timothy 2:25">2 Timothy 2:25</span>
            </li>
          </ul>
        </li>
        <li>
          (On the law of God): Speak of them when you sit in your home, walk by the way, lie down, rise up
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:7">Deuteronomy 6:7</span> ,
              <span class="modal-verse" id="Deuteronomy 11:19">Deuteronomy 11:19</span>
            </li>
            <li>
              Daily
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Hebrews 3:13">Hebrews 3:13</span>
                </li>
              </ul>
            </li>
            <li>
              Shall not depart out of thy mouth
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Joshua 1:8">Joshua 1:8</span> (part of meditation)
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Rebuke (false prophets, false accusers or the wicked)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:24-25">Proverbs 24:24-25</span> ,
              <span class="modal-verse" id="Proverbs 28:4">28:4</span> ,
              <span class="modal-verse" id="1 Timothy 5:20">1 Timothy 5:20</span> (make an example),
              <span class="modal-verse" id="Titus 1:13">Titus 1:13</span> ,
              <span class="modal-verse" id="Jude 1:3">Jude 1:3</span>
            </li>
          </ul>
        </li>
        <li>
          Hard preaching mannerisms: Lift voice in strength
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Isaiah 58:1">Isaiah 58:1</span>
            </li>
            <li>
              Smite with thy hand, stomp with thy foot
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Ezekiel 6:11">Ezekiel 6:11</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Elder women teach the younger women
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 2:4">Titus 2:4</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Control</span>
      <ul class="styled">
        <li>
          Restrain your words
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 10:8">Proverbs 10:8</span> ,
              <span class="modal-verse" id="Proverbs 10:10">10:10</span> ,
              <span class="modal-verse" id="Proverbs 10:19">10:19</span> ,
              <span class="modal-verse" id="Proverbs 13:3">13:3</span> ,
              <span class="modal-verse" id="Proverbs 14:23">14:23</span> ,
              <span class="modal-verse" id="Proverbs 14:33">14:33</span> ,
              <span class="modal-verse" id="Proverbs 15:2">15:2</span> ,
              <span class="modal-verse" id="Proverbs 15:23">15:23</span> ,
              <span class="modal-verse" id="Proverbs 17:27-28">17:27-28</span> ,
              <span class="modal-verse" id="Proverbs 21:23">21:23</span> ,
              <span class="modal-verse" id="Proverbs 25:15">25:15</span> ,
              <span class="modal-verse" id="Proverbs 29:11">29:11</span> ,
              <span class="modal-verse" id="Ecclesiastes 5:1-3">Ecclesiastes 5:1-3</span> ,
              <span class="modal-verse" id="Ecclesiastes 5:7">5:7</span> ,
              <span class="modal-verse" id="Ecclesiastes 10:14">10:14</span>
            </li>
          </ul>
        </li>
        <li>
          Swift to hear, slow to speak (especially don’t interrupt)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 18:13">Proverbs 18:13</span> ,
              <span class="modal-verse" id="Proverbs 29:11">29:11</span> ,
              <span class="modal-verse" id="Proverbs 29:20">29:20</span> ,
              <span class="modal-verse" id="James 1:19">James 1:19</span>
            </li>
          </ul>
        </li>
        <li>
          Shut up and work
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 14:23">Proverbs 14:23</span> ,
              <span class="modal-verse" id="Proverbs 19:24">19:24</span> ,
              <span class="modal-verse" id="Proverbs 26:15">26:15</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:11">1 Thessalonians 4:11</span> ,
              <span class="modal-verse" id="2 Thessalonians 3:12">2 Thessalonians 3:12</span>
            </li>
          </ul>
        </li>
        <li>
          Not answering again (to one’s boss)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 2:9">Titus 2:9</span>
            </li>
          </ul>
        </li>
        <li>
          Forbearing threatening (to one’s servant)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 6:9">Ephesians 6:9</span>
            </li>
          </ul>
        </li>
        <li>
          No vain/idle speech
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 12:36">Matthew 12:36</span> ,
              <span class="modal-verse" id="Ephesians 5:4">Ephesians 5:4</span> ,
              <span class="modal-verse" id="1 Timothy 1:6">1 Timothy 1:6</span> ,
              <span class="modal-verse" id="1 Timothy 6:20">6:20</span> ,
              <span class="modal-verse" id="2 Timothy 2:14">2 Timothy 2:14</span> ,
              <span class="modal-verse" id="2 Timothy 2:16">2:16</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not take the name of the Lord thy God in vain
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:7">Exodus 20:7</span> ,
              <span class="modal-verse" id="Deuteronomy 5:11">Deuteronomy 5:11</span>
            </li>
          </ul>
        </li>
        <li>
          Jesting vs. gravity
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 5:4">Ephesians 5:4</span> ,
              <span class="modal-verse" id="1 Timothy 3:8">1 Timothy 3:8</span> ,
              <span class="modal-verse" id="1 Timothy 3:11">3:11</span> ,
              <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
              <span class="modal-verse" id="Titus 2:7">2:7</span>
            </li>
          </ul>
        </li>
        <li>
          Avoid fables
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 1:4">1 Timothy 1:4</span> ,
              <span class="modal-verse" id="1 Timothy 4:7">4:7</span> ,
              <span class="modal-verse" id="Titus 1:14">Titus 1:14</span> ,
              <span class="modal-verse" id="Titus 3:9">3:9</span>
            </li>
          </ul>
        </li>
        <li>
          Avoid genealogies
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 1:4">1 Timothy 1:4</span> ,
              <span class="modal-verse" id="Titus 3:9">Titus 3:9</span>
            </li>
          </ul>
        </li>
        <li>
          Avoid foolish questions
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Timothy 2:23">2 Timothy 2:23</span> ,
              <span class="modal-verse" id="Titus 3:9">Titus 3:9</span>
            </li>
          </ul>
        </li>
        <li>
          Avoid filthy, profane, evil, corrupt speech
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span> ,
              <span class="modal-verse" id="Ephesians 4:29">Ephesians 4:29</span> ,
              <span class="modal-verse" id="Ephesians 4:31">4:31</span> ,
              <span class="modal-verse" id="Ephesians 5:4">5:4</span> ,
              <span class="modal-verse" id="Colossians 3:8">Colossians 3:8</span> ,
              <span class="modal-verse" id="1 Timothy 6:20">1 Timothy 6:20</span> ,
              <span class="modal-verse" id="2 Timothy 2:16">2 Timothy 2:16</span> ,
              <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
              <span class="modal-verse" id="James 4:11">James 4:11</span> ,
              <span class="modal-verse" id="1 Peter 3:9">1 Peter 3:9</span>
            </li>
          </ul>
        </li>
        <li>
          Blasphemy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:12">Leviticus 19:12</span> ,
              <span class="modal-verse" id="Leviticus 22:32">22:32</span> ,
              <span class="modal-verse" id="Malachi 1:7">Malachi 1:7</span> ,
              <span class="modal-verse" id="Malachi 1:12">1:12</span> ,
              <span class="modal-verse" id="Matthew 15:19">Matthew 15:19</span> ,
              <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
              <span class="modal-verse" id="Colossians 3:8">Colossians 3:8</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t blame God for your temptations
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:13">James 1:13</span> ,
              <span class="modal-verse" id="James 1:16">1:16</span>
            </li>
          </ul>
        </li>
        <li>
          Curse not a ruler
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:28">Exodus 22:28</span> ,
              <span class="modal-verse" id="Ecclesiastes 10:20">Ecclesiastes 10:20</span> ,
              <span class="modal-verse" id="Acts 23:5">Acts 23:5</span>
            </li>
          </ul>
        </li>
        <li>
          Bless (and don’t curse) your parents
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 30:11">Proverbs 30:11</span> ,
              <span class="modal-verse" id="Proverbs 31:28">31:28</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t denigrate your brother’s name
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:22">Matthew 5:22</span> ,
              <span class="modal-verse" id="Acts 10:15">Acts 10:15</span> ,
              <span class="modal-verse" id="2 Corinthians 11:16">2 Corinthians 11:16</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t backbite (willful defamation of a person who is not present)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 15:3">Psalm 15:3</span> ,
              <span class="modal-verse" id="Proverbs 25:23">Proverbs 25:23</span> ,
              <span class="modal-verse" id="Romans 1:29">Romans 1:29</span> ,
              <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t slander (false defamatory statements)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 10:18">Proverbs 10:18</span> ,
              <span class="modal-verse" id="1 Timothy 3:11">1 Timothy 3:11</span> ,
              <span class="modal-verse" id="1 Peter 2:1">1 Peter 2:1</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t be a talebearer (to reveal secrets or gossip)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:16">Leviticus 19:16</span> ,
              <span class="modal-verse" id="Proverbs 6:19">Proverbs 6:19</span> ,
              <span class="modal-verse" id="Proverbs 11:13">11:13</span> ,
              <span class="modal-verse" id="Proverbs 16:28">16:28</span> ,
              <span class="modal-verse" id="Proverbs 18:8">18:8</span> ,
              <span class="modal-verse" id="Proverbs 20:19">20:19</span> ,
              <span class="modal-verse" id="Proverbs 26:20">26:20</span> ,
              <span class="modal-verse" id="Proverbs 26:22">26:22</span> ,
              <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span>
            </li>
          </ul>
        </li>
        <li>
          Bless (and curse not) your enemies
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Job 31:30">Job 31:30</span> ,
              <span class="modal-verse" id="Matthew 5:44">Matthew 5:44</span> ,
              <span class="modal-verse" id="Luke 6:28">Luke 6:28</span> ,
              <span class="modal-verse" id="Romans 12:14">Romans 12:14</span> ,
              <span class="modal-verse" id="James 3:10">James 3:10</span> ,
              <span class="modal-verse" id="1 Peter 3:9-10">1 Peter 3:9-10</span>
            </li>
          </ul>
        </li>
        <li>
          Speak kindly: pleasant, gracious, courteous
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Colossians 4:6">Colossians 4:6</span> ,
              <span class="modal-verse" id="Proverbs 15:1">Proverbs 15:1</span> ,
              <span class="modal-verse" id="Proverbs 16:14">16:14</span> ,
              <span class="modal-verse" id="Proverbs 16:24">16:24</span> ,
              <span class="modal-verse" id="Proverbs 22:11">22:11</span> ,
              <span class="modal-verse" id="Proverbs 31:26">31:26</span> ,
              <span class="modal-verse" id="Ecclesiastes 10:12">Ecclesiastes 10:12</span>
            </li>
          </ul>
        </li>
        <li>
          Neither bid him Godspeed (to false prophet)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 John 1:10">2 John 1:10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lying</span>
      <ul class="styled">
        <li>
          Don’t lie
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:11">Leviticus 19:11</span> ,
              <span class="modal-verse" id="Psalm 52:3">Psalm 52:3</span> ,
              <span class="modal-verse" id="Psalm 59:12">59:12</span> ,
              <span class="modal-verse" id="Psalm 119:29">119:29</span> ,
              <span class="modal-verse" id="Psalm 119:163">119:163</span> ,
              <span class="modal-verse" id="Proverbs 10:18">Proverbs 10:18</span> ,
              <span class="modal-verse" id="Proverbs 3:3">3:3</span> ,
              <span class="modal-verse" id="Proverbs 6:17">6:17</span> ,
              <span class="modal-verse" id="Proverbs 12:17">12:17</span> ,
              <span class="modal-verse" id="Proverbs 12:19">12:19</span> ,
              <span class="modal-verse" id="Proverbs 12:22">12:22</span> ,
              <span class="modal-verse" id="Proverbs 13:5">13:5</span> ,
              <span class="modal-verse" id="Proverbs 14:5">14:5</span> ,
              <span class="modal-verse" id="Proverbs 14:25">14:25</span> ,
              <span class="modal-verse" id="Proverbs 17:4">17:4</span> ,
              <span class="modal-verse" id="Proverbs 17:7">17:7</span> ,
              <span class="modal-verse" id="Proverbs 19:5">19:5</span> ,
              <span class="modal-verse" id="Proverbs 19:9">19:9</span> ,
              <span class="modal-verse" id="Proverbs 26:28">26:28</span> ,
              <span class="modal-verse" id="Proverbs 30:8">30:8</span> ,
              <span class="modal-verse" id="Zechariah 8:16">Zechariah 8:16</span> ,
              <span class="modal-verse" id="Romans 12:17">Romans 12:17</span> ,
              <span class="modal-verse" id="Ephesians 4:15">Ephesians 4:15</span> ,
              <span class="modal-verse" id="Ephesians 4:25">4:25</span> ,
              <span class="modal-verse" id="Ephesians 6:14">6:14</span> ,
              <span class="modal-verse" id="Colossians 3:9">Colossians 3:9</span> ,
              <span class="modal-verse" id="1 Timothy 1:10">1 Timothy 1:10</span> ,
              <span class="modal-verse" id="1 Timothy 3:8">3:8</span> ,
              <span class="modal-verse" id="1 Peter 2:12">1 Peter 2:12</span> ,
              <span class="modal-verse" id="Revelation 21:8">Revelation 21:8</span>
            </li>
            <li>
              Thou shalt not bear false witness
              <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Bearing_False_Witness.mp4">
                <div class="tooltip">
                  <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
                  <span class="tooltiptext">sermon: bearing false witness</span>
                </div>
              </a>
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 20:16">Exodus 20:16</span> ,
                  <span class="modal-verse" id="Exodus 23:1">23:1</span> ,
                  <span class="modal-verse" id="Deuteronomy 5:20">Deuteronomy 5:20</span> ,
                  <span class="modal-verse" id="Proverbs 6:19">Proverbs 6:19</span> ,
                  <span class="modal-verse" id="Proverbs 12:17">12:17</span> ,
                  <span class="modal-verse" id="Proverbs 14:5">14:5</span> ,
                  <span class="modal-verse" id="Proverbs 19:5">19:5</span> ,
                  <span class="modal-verse" id="Proverbs 19:9">19:9</span> ,
                  <span class="modal-verse" id="Proverbs 21:28">21:28</span> ,
                  <span class="modal-verse" id="Proverbs 24:28">24:28</span> ,
                  <span class="modal-verse" id="Proverbs 25:18">25:18</span> ,
                  <span class="modal-verse" id="Matthew 15:19">Matthew 15:19</span> ,
                  <span class="modal-verse" id="Matthew 19:18">19:18</span> ,
                  <span class="modal-verse" id="Mark 10:19">Mark 10:19</span> ,
                  <span class="modal-verse" id="Luke 3:14">Luke 3:14</span> ,
                  <span class="modal-verse" id="Luke 18:20">18:20</span> ,
                  <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
                  <span class="modal-verse" id="1 Timothy 1:10">1 Timothy 1:10</span> ,
                  <span class="modal-verse" id="Titus 2:3">Titus 2:3</span>
                </li>
              </ul>
            </li>
            <li>
              Don’t deal falsely (to cheat or deceive people)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Leviticus 19:11">Leviticus 19:11</span> ,
                  <span class="modal-verse" id="Proverbs 12:22">Proverbs 12:22</span> ,
                  <span class="modal-verse" id="Proverbs 20:17">20:17</span> ,
                  <span class="modal-verse" id="1 Peter 3:10">1 Peter 3:10</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">to whom</span>
      <ul class="styled">
        <li>
          Speak only to those who receive the Word
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 25:11-12">Proverbs 25:11-12</span> ,
              <span class="modal-verse" id="Matthew 10:14">Matthew 10:14</span> ,
              <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> (debates) ,
              <span class="modal-verse" id="Titus 3:9">Titus 3:9</span> (Don’t strive about the law)
            </li>
            <li>
              Not a fool
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 9:6">Proverbs 9:6</span> ,
                  <span class="modal-verse" id="Proverbs 14:7">14:7</span> ,
                  <span class="modal-verse" id="Proverbs 17:12">17:12</span> ,
                  <span class="modal-verse" id="Proverbs 23:9">23:9</span> ,
                  <span class="modal-verse" id="Proverbs 29:9">29:9</span> ,
                  <span class="modal-verse" id="1 Corinthians 14:38">1 Corinthians 14:38</span>
                </li>
              </ul>
            </li>
            <li>
              Not a scorner (mocker)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 9:7-8">Proverbs 9:7-8</span> ,
                </li>
              </ul>
            </li>
            <li>
              Not a wicked man
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 9:7">Proverbs 9:7</span> ,
                  <span class="modal-verse" id="Matthew 7:6">Matthew 7:6</span> ,
                  <span class="modal-verse" id="Revelation 22:11">Revelation 22:11</span>
                </li>
              </ul>
            </li>
            <li>
              Not a heretic
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Timothy 6:20">1 Timothy 6:20</span> (fake knowledge),
                  <span class="modal-verse" id="Titus 3:10-11">Titus 3:10-11</span>
                </li>
              </ul>
            </li>
            <li>
              Rebuke a wise man
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 9:8-9">Proverbs 9:8-9</span> ,
                  <span class="modal-verse" id="Proverbs 15:31">15:31</span>
                </li>
              </ul>
            </li>
            <li>
              Rebuke a just man
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 9:9">Proverbs 9:9</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="strength">STRENGTH</h3>
  <ol>
    <li>
      <span class="main-li">Be Strong</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Be_Strong_&_Endure_Hardness.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: be strong and endure hardness</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 31:6-7">Deuteronomy 31:6-7</span> ,
          <span class="modal-verse" id="Deuteronomy 31:23">31:23</span> ,
          <span class="modal-verse" id="Joshua 1:6-7">Joshua 1:6-7</span> ,
          <span class="modal-verse" id="Joshua 1:9">1:9</span> ,
          <span class="modal-verse" id="1 Kings 2:2">1 Kings 2:2</span> ,
          <span class="modal-verse" id="1 Chronicles 22:13">1 Chronicles 22:13</span> ,
          <span class="modal-verse" id="1 Chronicles 28:10">1 Chronicles 28:10</span> ,
          <span class="modal-verse" id="1 Chronicles 28:20">1 Chronicles 28:20</span> ,
          <span class="modal-verse" id="2 Chronicles 15:7">2 Chronicles 15:7</span> ,
          <span class="modal-verse" id="2 Chronicles 32:7">2 Chronicles 32:7</span> ,
          <span class="modal-verse" id="Proverbs 20:29">Proverbs 20:29</span> ,
          <span class="modal-verse" id="Proverbs 24:5">24:5</span> ,
          <span class="modal-verse" id="Proverbs 24:10">24:10</span> ,
          <span class="modal-verse" id="Proverbs 28:1">28:1</span> ,
          <span class="modal-verse" id="Proverbs 30:30">30:30</span> ,
          <span class="modal-verse" id="Isaiah 35:3-4">Isaiah 35:3-4</span> ,
          <span class="modal-verse" id="Haggai 2:4">Haggai 2:4</span> ,
          <span class="modal-verse" id="Zechariah 8:9">Zechariah 8:9</span> ,
          <span class="modal-verse" id="Zechariah 8:13">8:13</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">1 Corinthians 16:13</span> ,
          <span class="modal-verse" id="Galatians 6:9">Galatians 6:9</span> ,
          <span class="modal-verse" id="Ephesians 6:10">Ephesians 6:10</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:13">2 Thessalonians 3:13</span> ,
          <span class="modal-verse" id="2 Timothy 2:1">2 Timothy 2:1</span> ,
          <span class="modal-verse" id="Revelation 2:3">Revelation 2:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Encourage others</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Isaiah 35:4">Isaiah 35:4</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:11">1 Thessalonians 5:11</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:14">5:14</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="thoughts">THOUGHTS</h3>
  <ol>
    <li>
      <span class="main-li">Meditate (to reflect upon: ponder) on God’s law (Word) day and night (with the purpose of doing what God says)</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Bible_Memorization.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: bible memorization</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:6">Deuteronomy 6:6</span> ,
          <span class="modal-verse" id="Deuteronomy 6:12">6:12</span> ,
          <span class="modal-verse" id="Deuteronomy 8:11">8:11</span> ,
          <span class="modal-verse" id="Deuteronomy 11:18">11:18</span> ,
          <span class="modal-verse" id="Joshua 1:8">Joshua 1:8</span> ,
          <span class="modal-verse" id="Psalm 1:2">Psalm 1:2</span> ,
          <span class="modal-verse" id="Psalm 4:4">Psalm 4:4</span> ,
          <span class="modal-verse" id="Proverbs 2:1">Proverbs 2:1</span> ,
          <span class="modal-verse" id="Proverbs 3:1">3:1</span> ,
          <span class="modal-verse" id="Proverbs 4:21">4:21</span> ,
          <span class="modal-verse" id="Haggai 1:5">Haggai 1:5</span> ,
          <span class="modal-verse" id="Haggai 1:7">1:7</span> ,
          <span class="modal-verse" id="Romans 12:2">Romans 12:2</span> ,
          <span class="modal-verse" id="1 Corinthians 10:15">1 Corinthians 10:15</span> ,
          <span class="modal-verse" id="2 Corinthians 10:5">2 Corinthians 10:5</span> ,
          <span class="modal-verse" id="Ephesians 5:17">Ephesians 5:17</span> ,
          <span class="modal-verse" id="Colossians 3:16">Colossians 3:16</span> ,
          <span class="modal-verse" id="1 Timothy 4:15">1 Timothy 4:15</span> ,
          <span class="modal-verse" id="2 Timothy 2:15">2 Timothy 2:15</span> ,
          <span class="modal-verse" id="2 Peter 3:2">2 Peter 3:2</span>
        </li>
        <li>
          How to: Pick Bible verses to memorize and repeatedly think on throughout the day, read the Bible, listen to the Bible, listen to sermons, etc.
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Evil thoughts (thoughts/plans/desires of committing sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 15:19">Matthew 15:19</span> ,
          <span class="modal-verse" id="Mark 7:21">Mark 7:21</span> ,
          <span class="modal-verse" id="1 Corinthians 13:5">1 Corinthians 13:5</span> ,
          <span class="modal-verse" id="Genesis 6:5">Genesis 6:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Think on spiritual/godly things (in general): not earthly/vain things</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Philippians 4:8">Philippians 4:8</span> ,
          <span class="modal-verse" id="1 Chronicles 16:12">1 Chronicles 16:12</span> ,
          <span class="modal-verse" id="Psalm 10:4">Psalm 10:4</span> ,
          <span class="modal-verse" id="Psalm 15:2">15:2</span> ,
          <span class="modal-verse" id="Psalm 119:113">119:113</span> ,
          <span class="modal-verse" id="Isaiah 26:3">Isaiah 26:3</span> ,
          <span class="modal-verse" id="Romans 8:5">Romans 8:5</span> ,
          <span class="modal-verse" id="Philippians 3:19">Philippians 3:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The thought of foolishness is sin</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 24:9">Proverbs 24:9</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="tribulation">TRIBULATION</h3>
  <ol>
    <li>
      <span class="main-li">Think not that Jesus came to send peace</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 10:34">Matthew 10:34</span> ,
          <span class="modal-verse" id="1 John 3:13">1 John 3:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take up your cross daily: endure suffering/sacrifice that comes with serving God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 10:38">Matthew 10:38</span> ,
          <span class="modal-verse" id="Matthew 16:24">16:24</span> ,
          <span class="modal-verse" id="Mark 8:34">Mark 8:34</span> ,
          <span class="modal-verse" id="Luke 9:23">Luke 9:23</span> ,
          <span class="modal-verse" id="Luke 14:27">14:27</span> ,
          <span class="modal-verse" id="John 15:13-14">John 15:13-14</span> ,
          <span class="modal-verse" id="Romans 12:1">Romans 12:1</span> ,
          <span class="modal-verse" id="2 Timothy 1:8">2 Timothy 1:8</span> ,
          <span class="modal-verse" id="2 Timothy 2:3-5">2 Timothy 2:3-5</span> ,
          <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span> ,
          <span class="modal-verse" id="Hebrews 13:13">Hebrews 13:13</span> ,
          <span class="modal-verse" id="1 Peter 4:1">1 Peter 4:1</span> ,
          <span class="modal-verse" id="John 12:24">John 12:24</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t deny Jesus; Don’t be ashamed of Jesus; or his words or the gospel or the people / things of god</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Timothy 1:8">2 Timothy 1:8</span> ,
          <span class="modal-verse" id="Matthew 10:32-33">Matthew 10:32-33</span> ,
          <span class="modal-verse" id="Mark 8:38">Mark 8:38</span> ,
          <span class="modal-verse" id="Luke 9:26">Luke 9:26</span> ,
          <span class="modal-verse" id="Romans 1:16">Romans 1:16</span>
        </li>
      </ul>
    </li>
    <li>
      Be ready to explain your reason for hope when suffering wrongfully
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Peter 3:15">1 Peter 3:15</span>
        </li>
      </ul>
    </li>
    <li>
      Don’t premeditate what you will say in persecution
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 10:19">Matthew 10:19</span> ,
          <span class="modal-verse" id="Mark 13:9">Mark 13:9</span> ,
          <span class="modal-verse" id="Mark 13:11">Mark 13:11</span> ,
          <span class="modal-verse" id="Luke 21:14">Luke 21:14</span>
        </li>
      </ul>
    </li>
    <li>
      Thou shalt consider in thine heart, that, as a man chasteneth his son, so the Lord thy God chasteneth thee (realize that God also allows us to go through trouble to correct us)
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 8:5">Deuteronomy 8:5</span> ,
          <span class="modal-verse" id="Proverbs 3:11">Proverbs 3:11</span> ,
          <span class="modal-verse" id="Hebrews 12:5">Hebrews 12:5</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="trust">TRUST</h3>
  <ol>
    <li>
      <span class="main-li">Have Faith in God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Chronicles 20:20">2 Chronicles 20:20</span> ,
          <span class="modal-verse" id="Psalm 4:5">Psalm 4:5</span> ,
          <span class="modal-verse" id="Psalm 37:3">37:3</span> ,
          <span class="modal-verse" id="Psalm 37:5">37:5</span> ,
          <span class="modal-verse" id="Psalm 62:8">62:8</span> ,
          <span class="modal-verse" id="Psalm 115:9-11">115:9-11</span> ,
          <span class="modal-verse" id="Proverbs 3:5-6">Proverbs 3:5-6</span> ,
          <span class="modal-verse" id="Proverbs 16:20">16:20</span> ,
          <span class="modal-verse" id="Proverbs 18:10">18:10</span> ,
          <span class="modal-verse" id="Proverbs 28:25">28:25</span> ,
          <span class="modal-verse" id="Proverbs 29:25">29:25</span> ,
          <span class="modal-verse" id="Isaiah 26:4">Isaiah 26:4</span> ,
          <span class="modal-verse" id="Isaiah 50:10">50:10</span> ,
          <span class="modal-verse" id="Mark 11:22">Mark 11:22</span> ,
          <span class="modal-verse" id="John 14:1">John 14:1</span> ,
          <span class="modal-verse" id="Romans 14:5">Romans 14:5</span> ,
          <span class="modal-verse" id="Romans 14:22">14:22</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Ephesians 6:16">Ephesians 6:16</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:8">1 Thessalonians 5:8</span> ,
          <span class="modal-verse" id="1 Timothy 1:19">1 Timothy 1:19</span> ,
          <span class="modal-verse" id="1 Timothy 6:11">6:11</span> ,
          <span class="modal-verse" id="1 Timothy 6:17">6:17</span> ,
          <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span> ,
          <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
          <span class="modal-verse" id="Hebrews 3:12">Hebrews 3:12</span> ,
          <span class="modal-verse" id="Hebrews 4:14">4:14</span> ,
          <span class="modal-verse" id="Hebrews 6:11">6:11</span> ,
          <span class="modal-verse" id="Hebrews 10:22-23">10:22-23</span> ,
          <span class="modal-verse" id="Hebrews 10:35">10:35</span> ,
          <span class="modal-verse" id="Hebrews 11:6">11:6</span> ,
          <span class="modal-verse" id="James 4:8">James 4:8</span>
        </li>
        <li>
          Meaning: To believe everything God says
        </li>
        <li>
          Specific Mentions
          <ul class="sub">
            <li>
              Believe that God rewards them that diligently seek (obey) him
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 7:9">Deuteronomy 7:9</span> ,
                  <span class="modal-verse" id="Hebrews 11:6">Hebrews 11:6</span> ,
                  <span class="modal-verse" id="Galatians 6:7">Galatians 6:7</span> ,
                  <span class="modal-verse" id="Ephesians 6:8">Ephesians 6:8</span>
                </li>
              </ul>
            </li>
            <li>
              Be sure your sin will find you out
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Numbers 32:23">Numbers 32:23</span> ,
                  <span class="modal-verse" id="Deuteronomy 7:10">Deuteronomy 7:10</span> ,
                  <span class="modal-verse" id="Proverbs 14:16">Proverbs 14:16</span> ,
                  <span class="modal-verse" id="Galatians 6:7">Galatians 6:7</span> ,
                  <span class="modal-verse" id="Ephesians 5:6">Ephesians 5:6</span> ,
                  <span class="modal-verse" id="Ephesians 6:8">6:8</span>
                </li>
              </ul>
            </li>
            <li>
              Commit your works unto the Lord (Entrust God to bring your desires to pass: he alone has control over results, while
              you focus on living a life pleasing to God)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 16:3">Proverbs 16:3</span> ,
                  <span class="modal-verse" id="Proverbs 20:24">20:24</span>
                </li>
              </ul>
            </li>
            <li>
              Take no thought for your life [Believe God will provide your physical needs as you seek first the Kingdom of God and His righteousness]
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Matthew 6:25">Matthew 6:25</span> ,
                  <span class="modal-verse" id="Matthew 6:31">6:31</span> ,
                  <span class="modal-verse" id="Luke 12:22">Luke 12:22</span> ,
                  <span class="modal-verse" id="Luke 12:29">12:29</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t trust…</span>
      <ul class="styled">
        <li>
          Your own/others understanding (over God’s word)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 3:5">Proverbs 3:5</span> ,
              <span class="modal-verse" id="Proverbs 14:15">14:15</span> ,
              <span class="modal-verse" id="Proverbs 19:27">19:27</span> ,
              <span class="modal-verse" id="Proverbs 28:26">28:26</span>
            </li>
          </ul>
        </li>
        <li>
          Man (his help and word)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 60:11-12">Psalm 60:11-12</span> ,
              <span class="modal-verse" id="Psalm 146:3">Psalm 146:3</span> ,
              <span class="modal-verse" id="Jeremiah 17:5-8">Jeremiah 17:5-8</span> ,
              <span class="modal-verse" id="Micah 7:5-7">Micah 7:5-7</span>
            </li>
          </ul>
        </li>
        <li>
          Riches
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Job 31:24">Job 31:24</span> ,
              <span class="modal-verse" id="Proverbs 11:28">Proverbs 11:28</span> ,
              <span class="modal-verse" id="1 Timothy 6:17">1 Timothy 6:17</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Testing</span>
      <ul class="styled">
        <li>
          Thou shalt not tempt the Lord thy God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:16">Deuteronomy 6:16</span> ,
              <span class="modal-verse" id="Matthew 4:7">Matthew 4:7</span> ,
              <span class="modal-verse" id="Luke 4:12">Luke 4:12</span> ,
              <span class="modal-verse" id="1 Corinthians 10:9">1 Corinthians 10:9</span> ,
              <span class="modal-verse" id="Exodus 17:2">Exodus 17:2</span> ,
              <span class="modal-verse" id="Exodus 17:7">17:7</span> ,
              <span class="modal-verse" id="Psalm 78:18-22">Psalm 78:18-22</span> ,
              <span class="modal-verse" id="Mark 8:11-12">Mark 8:11-12</span> ,
              <span class="modal-verse" id="Luke 11:16">Luke 11:16</span> ,
              <span class="modal-verse" id="Luke 11:29">11:29</span> ,
              <span class="modal-verse" id="Hebrews 3:8">Hebrews 3:8</span> ,
              <span class="modal-verse" id="Hebrews 3:15">3:15</span>
            </li>
            <li>
              Means to test; not to entice to do evil because He cannot be tempted with evil- James 1:13, (testing God
              out of doubt)
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="vows">VOWS</h3>
  <ol>
    <li>
      <span class="main-li">Swear not (covenant, vow, oath, promise): instead be a man of your word</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:33-37">Matthew 5:33-37</span> ,
          <span class="modal-verse" id="James 5:12">James 5:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">But if you swear, then keep your word</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 5:4">Leviticus 5:4</span> ,
          <span class="modal-verse" id="Leviticus 19:12">19:12</span> ,
          <span class="modal-verse" id="Numbers 30:2">Numbers 30:2</span> ,
          <span class="modal-verse" id="Deuteronomy 23:21-23">Deuteronomy 23:21-23</span> ,
          <span class="modal-verse" id="Proverbs 20:25">Proverbs 20:25</span> ,
          <span class="modal-verse" id="Ecclesiastes 5:4-6">Ecclesiastes 5:4-6</span> ,
          <span class="modal-verse" id="Zechariah 8:17">Zechariah 8:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Father or husband can revoke a daughter’s/wife’s vow in the day he heard it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 30:2-16">Numbers 30:2-16</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="wisdom">WISDOM</h3>
  <ol>
    <li>
      <span class="main-li">Be wise</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 1:23">Proverbs 1:23</span> ,
          <span class="modal-verse" id="Proverbs 3:21">3:21</span> ,
          <span class="modal-verse" id="Proverbs 4:5-7">4:5-7</span> ,
          <span class="modal-verse" id="Proverbs 4:13">4:13</span> ,
          <span class="modal-verse" id="Proverbs 4:20">4:20</span> ,
          <span class="modal-verse" id="Proverbs 4:23-27">4:23-27</span> ,
          <span class="modal-verse" id="Proverbs 8:5-6">8:5-6</span> ,
          <span class="modal-verse" id="Proverbs 8:10">8:10</span> ,
          <span class="modal-verse" id="Proverbs 8:32">8:32</span> ,
          <span class="modal-verse" id="Proverbs 8:33-34">8:33-34</span> ,
          <span class="modal-verse" id="Proverbs 9:4-5">9:4-5</span> ,
          <span class="modal-verse" id="Proverbs 10:14">10:14</span> ,
          <span class="modal-verse" id="Proverbs 15:14">15:14</span> ,
          <span class="modal-verse" id="Proverbs 18:1">18:1</span> ,
          <span class="modal-verse" id="Proverbs 22:17">22:17</span> ,
          <span class="modal-verse" id="Proverbs 22:29">22:29</span> ,
          <span class="modal-verse" id="Proverbs 23:19">23:19</span> ,
          <span class="modal-verse" id="Proverbs 27:11">27:11</span> ,
          <span class="modal-verse" id="Matthew 10:16">Matthew 10:16</span> ,
          <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
          <span class="modal-verse" id="Ephesians 5:10">Ephesians 5:10</span> ,
          <span class="modal-verse" id="Ephesians 5:15">5:15</span> ,
          <span class="modal-verse" id="Ephesians 5:17">5:17</span> ,
          <span class="modal-verse" id="2 Peter 1:5">2 Peter 1:5</span> ,
          <span class="modal-verse" id="Colossians 3:16">Colossians 3:16</span> ,
          <span class="modal-verse" id="Colossians 4:5">4:5</span>
        </li>
        <li>
          Be wise to that which is good
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 16:19">Romans 16:19</span> ,
              <span class="modal-verse" id="1 Corinthians 14:20">1 Corinthians 14:20</span>
            </li>
          </ul>
        </li>
        <li>
          Be simple concerning evil (be ignorant of)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 16:19">Romans 16:19</span> ,
              <span class="modal-verse" id="1 Corinthians 14:20">1 Corinthians 14:20</span> ,
              <span class="modal-verse" id="1 Peter 2:1 ">1 Peter 2:1 </span> (guile)
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be not wise in thine own eyes</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:7">Proverbs 3:7</span> ,
          <span class="modal-verse" id="Proverbs 5:1">5:1</span> ,
          <span class="modal-verse" id="Proverbs 26:12">26:12</span> ,
          <span class="modal-verse" id="Proverbs 26:16">26:16</span> ,
          <span class="modal-verse" id="Ecclesiastes 7:16">Ecclesiastes 7:16</span> ,
          <span class="modal-verse" id="Isaiah 5:21">Isaiah 5:21</span> ,
          <span class="modal-verse" id="James 1:21">James 1:21</span> ,
          <span class="modal-verse" id="James 3:13">3:13</span> ,
          <span class="modal-verse" id="Romans 12:16">Romans 12:16</span> ,
          <span class="modal-verse" id="1 Corinthians 3:18">1 Corinthians 3:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Redeem the time (time wasting)</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Becoming_Vain.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: becoming vain</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 12:11">Proverbs 12:11</span> ,
          <span class="modal-verse" id="Proverbs 28:19">28:19</span> ,
          <span class="modal-verse" id="Ephesians 5:16">Ephesians 5:16</span> ,
          <span class="modal-verse" id="Colossians 4:5">Colossians 4:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Seek/receive wise/godly council</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 11:14">Proverbs 11:14</span> ,
          <span class="modal-verse" id="Proverbs 12:5">12:5</span> ,
          <span class="modal-verse" id="Proverbs 12:15">12:15</span> ,
          <span class="modal-verse" id="Proverbs 15:22">15:22</span> ,
          <span class="modal-verse" id="Proverbs 19:20-21">19:20-21</span> ,
          <span class="modal-verse" id="Proverbs 20:5">20:5</span> ,
          <span class="modal-verse" id="Proverbs 20:18">20:18</span> ,
          <span class="modal-verse" id="Proverbs 21:30">21:30</span> ,
          <span class="modal-verse" id="Proverbs 24:6">24:6</span> ,
          <span class="modal-verse" id="Proverbs 27:9">27:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Go to now [means to act today/now; forget the past/future: sin of putting off good deeds]</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:27-28">Proverbs 3:27-28</span> ,
          <span class="modal-verse" id="Proverbs 27:1">27:1</span> ,
          <span class="modal-verse" id="Ecclesiastes 6:9">Ecclesiastes 6:9</span> ,
          <span class="modal-verse" id="Ecclesiastes 7:10">7:10</span> ,
          <span class="modal-verse" id="Ecclesiastes 11:4">11:4</span> ,
          <span class="modal-verse" id="Matthew 6:34">Matthew 6:34</span> ,
          <span class="modal-verse" id="John 4:35">John 4:35</span> ,
          <span class="modal-verse" id="Philippians 3:13">Philippians 3:13</span> ,
          <span class="modal-verse" id="Philippians 3:15">3:15</span> ,
          <span class="modal-verse" id="James 4:13">James 4:13</span> ,
          <span class="modal-verse" id="James 4:15">4:15</span> ,
          <span class="modal-verse" id="James 4:17">4:17</span> ,
          <span class="modal-verse" id="James 5:1">5:1</span> ,
          <span class="modal-verse" id="1 John 3:17">1 John 3:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Prove all things (applicable to preaching, taking in information, tasks performed, etc.)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 14:15">Proverbs 14:15</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:21">1 Thessalonians 5:21</span>
        </li>
        <li>
          Prove your own work
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 6:4">Galatians 6:4</span> ,
              <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="work">WORK</h3>
  <ol>
    <li>
      <span class="main-li">Work</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 2:15">Genesis 2:15</span> ,
          <span class="modal-verse" id="Proverbs 20:11">Proverbs 20:11</span> ,
          <span class="modal-verse" id="Galatians 6:5">Galatians 6:5</span> ,
          <span class="modal-verse" id="Haggai 2:4">Haggai 2:4</span> ,
          <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
          <span class="modal-verse" id="1 Thessalonians 4:11">1 Thessalonians 4:11</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:10-12">2 Thessalonians 3:10-12</span>
        </li>
        <li>
          Type 1:Spiritual (great commission)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 11:28-29">Matthew 11:28-29</span>
            </li>
          </ul>
        </li>
        <li>
          Type 2: With hands
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 6:5">Galatians 6:5</span> ,
              <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:11">1 Thessalonians 4:11</span> ,
              <span class="modal-verse" id="2 Thessalonians 3:10-12">2 Thessalonians 3:10-12</span> ,
              <span class="modal-verse" id="Proverbs 12:11">Proverbs 12:11</span> ,
              <span class="modal-verse" id="Proverbs 13:23">13:23</span> ,
              <span class="modal-verse" id="Proverbs 28:19">28:19</span>
            </li>
          </ul>
        </li>
        <li>
          How Much: about 72 hrs a week (a lifestyle)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:9">Exodus 20:9</span> ,
              <span class="modal-verse" id="John 9:4">John 9:4</span> ,
              <span class="modal-verse" id="John 11:9">11:9</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Work until you have enough to provide needs for you and your house (Type 2)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 6:5">Galatians 6:5</span> ,
          <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
          <span class="modal-verse" id="1 Thessalonians 4:12">1 Thessalonians 4:12</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:8">2 Thessalonians 3:8</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:10-12">3:10-12</span> ,
          <span class="modal-verse" id="John 6:26-27">John 6:26-27</span> ,
          <span class="modal-verse" id="John 21:15">21:15</span> ,
          <span class="modal-verse" id="1 Corinthians 7:21-24">1 Corinthians 7:21-24</span> ,
          <span class="modal-verse" id="Matthew 6:33">Matthew 6:33</span> ,
          <span class="modal-verse" id="Luke 12:31">Luke 12:31</span> ,
          <span class="modal-verse" id="1 Timothy 5:8">1 Timothy 5:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Work Ethic</span>
      <ul class="styled">
        <li>
          Work diligently (constant and earnest effort to accomplish something: no break/idle time) (sloth is slow/inactive)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 10:4">Proverbs 10:4</span> ,
              <span class="modal-verse" id="Proverbs 10:26">10:26</span> ,
              <span class="modal-verse" id="Proverbs 12:24">12:24</span> ,
              <span class="modal-verse" id="Proverbs 13:4">13:4</span> ,
              <span class="modal-verse" id="Proverbs 15:19">15:19</span> ,
              <span class="modal-verse" id="Proverbs 19:15">19:15</span> ,
              <span class="modal-verse" id="Proverbs 20:4">20:4</span> ,
              <span class="modal-verse" id="Proverbs 21:5">21:5</span> ,
              <span class="modal-verse" id="Proverbs 21:25">21:25</span> ,
              <span class="modal-verse" id="Proverbs 22:13">22:13</span> ,
              <span class="modal-verse" id="Proverbs 23:21">23:21</span> ,
              <span class="modal-verse" id="Proverbs 26:13-14">26:13-14</span> ,
              <span class="modal-verse" id="Proverbs 30:25-26">30:25-26</span> ,
              <span class="modal-verse" id="Proverbs 30:28">30:28</span> ,
              <span class="modal-verse" id="Proverbs 31:27">31:27</span> ,
              <span class="modal-verse" id="Ecclesiastes 10:18">Ecclesiastes 10:18</span> ,
              <span class="modal-verse" id="Ecclesiastes 11:6">11:6</span> ,
              <span class="modal-verse" id="Romans 12:8">Romans 12:8</span> ,
              <span class="modal-verse" id="Romans 12:11">12:11</span> ,
              <span class="modal-verse" id="Hebrews 6:11-12">Hebrews 6:11-12</span>
            </li>
            <li>
              Be diligent (spiritually)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 4:9">Deuteronomy 4:9</span> ,
                  <span class="modal-verse" id="Deuteronomy 6:17">6:17</span> ,
                  <span class="modal-verse" id="Joshua 22:5">Joshua 22:5</span> ,
                  <span class="modal-verse" id="Zechariah 6:15">Zechariah 6:15</span> ,
                  <span class="modal-verse" id="2 Peter 1:5">2 Peter 1:5</span> ,
                  <span class="modal-verse" id="2 Peter 1:10">1:10</span> ,
                  <span class="modal-verse" id="2 Peter 3:14">3:14</span> ,
                  <span class="modal-verse" id="1 Corinthians 15:58">1 Corinthians 15:58</span> (always)
                </li>
              </ul>
            </li>
            <li>
              Wait on your work (attend to it continually and nonstop)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Luke 12:35-36">Luke 12:35-36</span> ,
                  <span class="modal-verse" id="Romans 12:7-8">Romans 12:7-8</span> ,
                  <span class="modal-verse" id="Proverbs 27:18">Proverbs 27:18</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Love not sleep- (excessive sleep)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 6:9-11">Proverbs 6:9-11</span> ,
              <span class="modal-verse" id="Proverbs 10:5">10:5</span> ,
              <span class="modal-verse" id="Proverbs 19:15">19:15</span> ,
              <span class="modal-verse" id="Proverbs 20:13">20:13</span> ,
              <span class="modal-verse" id="Proverbs 24:30-34">24:30-34</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t be a busybody (interfering into other people's matters)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Peter 4:15">1 Peter 4:15</span>
            </li>
          </ul>
        </li>
        <li>
          Abound in your work
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ecclesiastes 11:1-2">Ecclesiastes 11:1-2</span> ,
              <span class="modal-verse" id="1 Corinthians 15:58">1 Corinthians 15:58</span>
            </li>
          </ul>
        </li>
        <li>
          Do every action as unto the LORD, and not unto men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 6:6-8">Proverbs 6:6-8</span> ,
              <span class="modal-verse" id="Proverbs 30:27">30:27</span> ,
              <span class="modal-verse" id="Proverbs 31:13">31:13</span> ,
              <span class="modal-verse" id="Matthew 23:5">Matthew 23:5</span> ,
              <span class="modal-verse" id="Romans 12:11">Romans 12:11</span> ,
              <span class="modal-verse" id="1 Corinthians 10:31">1 Corinthians 10:31</span> (to glorify),
              <span class="modal-verse" id="Galatians 4:18">Galatians 4:18</span> ,
              <span class="modal-verse" id="Ephesians 5:22">Ephesians 5:22</span> ,
              <span class="modal-verse" id="Ephesians 6:5-7">6:5-7</span> ,
              <span class="modal-verse" id="Colossians 3:17">Colossians 3:17</span> ,
              <span class="modal-verse" id="Colossians 3:22-23">22-23</span>
            </li>
          </ul>
        </li>
        <li>
          Do every action with all your might and strength
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:5">Deuteronomy 6:5</span> ,
              <span class="modal-verse" id="Ecclesiastes 9:10">Ecclesiastes 9:10</span> ,
              <span class="modal-verse" id="Zephaniah 3:16">Zephaniah 3:16</span> ,
              <span class="modal-verse" id="Matthew 22:37-38">Matthew 22:37-38</span> ,
              <span class="modal-verse" id="Mark 12:30">Mark 12:30</span> ,
              <span class="modal-verse" id="Luke 10:27">Luke 10:27</span>
            </li>
          </ul>
        </li>
        <li>
          Do every action with all one's mind, soul, heart (singleness of heart, not double minded, rather wholeheartedly)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:5">Deuteronomy 6:5</span> ,
              <span class="modal-verse" id="Deuteronomy 10:12">10:12</span> ,
              <span class="modal-verse" id="Deuteronomy 11:13">11:13</span> ,
              <span class="modal-verse" id="Matthew 22:37-38">Matthew 22:37-38</span> ,
              <span class="modal-verse" id="Mark 12:30">Mark 12:30</span> ,
              <span class="modal-verse" id="Luke 10:27">Luke 10:27</span> ,
              <span class="modal-verse" id="Romans 12:11">Romans 12:11</span> ,
              <span class="modal-verse" id="Galatians 4:18">Galatians 4:18</span> ,
              <span class="modal-verse" id="Ephesians 6:5-6">Ephesians 6:5-6</span> ,
              <span class="modal-verse" id="Colossians 3:22-23">Colossians 3:22-23</span> ,
              <span class="modal-verse" id="1 Peter 1:22">1 Peter 1:22</span> ,
              <span class="modal-verse" id="1 Peter 4:8">4:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Work Place</span>
      <ul class="styled">
        <li>
          Masters don’t oppress your servants (don't abuse power: treat servants fairly with justice and equity)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:14">Deuteronomy 24:14</span> ,
              <span class="modal-verse" id="Job 31:13">Job 31:13</span> ,
              <span class="modal-verse" id="Ephesians 6:9">Ephesians 6:9</span> ,
              <span class="modal-verse" id="Colossians 4:1">Colossians 4:1</span>
            </li>
          </ul>
        </li>
        <li>
          treat delicately (gentle/as a son)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 29:21">Proverbs 29:21</span> (<span class="modal-verse" id="1 Peter 2:18">1 Peter 2:18</span>)
            </li>
            <li>
              note: (<span class="modal-verse" id="Proverbs 29:19">Proverbs 29:19</span>) I think disciplinary action should laid out for all mis-conduct/disobedience and should be delivered impartially
            </li>
          </ul>
        </li>
        <li>
          Servants please their masters well in all things (fulfill their desires)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 2:9">Titus 2:9</span>
            </li>
          </ul>
        </li>
  </ol>
  <h3 id="zmisc">MISC</h3>
  <ol>
    <li>
      <span class="main-li">Seek God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Chronicles 16:11">1 Chronicles 16:11</span> ,
          <span class="modal-verse" id="1 Chronicles 22:19">22:19</span> ,
          <span class="modal-verse" id="1 Chronicles 28:9">28:9</span> ,
          <span class="modal-verse" id="Psalm 105:4">Psalm 105:4</span> ,
          <span class="modal-verse" id="Isaiah 55:6-7">Isaiah 55:6-7</span> ,
          <span class="modal-verse" id="Amos 5:4">Amos 5:4</span> ,
          <span class="modal-verse" id="Amos 5:6">5:6</span> ,
          <span class="modal-verse" id="Amos 5:8">5:8</span> ,
          <span class="modal-verse" id="Zephaniah 2:3">Zephaniah 2:3</span> ,
          <span class="modal-verse" id="Colossians 3:1">Colossians 3:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Walk before God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 17:1">Genesis 17:1</span> ,
          <span class="modal-verse" id="1 Samuel 2:30">1 Samuel 2:30</span> ,
          <span class="modal-verse" id="James 4:8">James 4:8</span>
        </li>
        <li>
          Meaning: (lit.) to walk in God’s presence. Application would be to acknowledge God’s presence (<span class="modal-verse" id="Psalm 145:18">Psalm 145:18</span>)
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be Perfect</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 17:1">Genesis 17:1</span> ,
          <span class="modal-verse" id="Deuteronomy 18:13">Deuteronomy 18:13</span> ,
          <span class="modal-verse" id="Matthew 5:48">Matthew 5:48</span> ,
          <span class="modal-verse" id="2 Corinthians 13:11">2 Corinthians 13:11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Follow Jesus</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Be_A_Follower.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: be a follower</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 4:19">Matthew 4:19</span> ,
          <span class="modal-verse" id="Matthew 8:22">8:22</span> ,
          <span class="modal-verse" id="Matthew 16:24">16:24</span> ,
          <span class="modal-verse" id="Matthew 19:21">19:21</span> ,
          <span class="modal-verse" id="Mark 1:17">Mark 1:17</span> ,
          <span class="modal-verse" id="Mark 8:34">8:34</span> ,
          <span class="modal-verse" id="Luke 5:27">Luke 5:27</span> ,
          <span class="modal-verse" id="Luke 9:59">9:59</span> ,
          <span class="modal-verse" id="John 1:43">John 1:43</span> ,
          <span class="modal-verse" id="John 21:19">21:19</span> ,
          <span class="modal-verse" id="Ephesians 5:1">Ephesians 5:1</span> ,
          <span class="modal-verse" id="Colossians 2:6-7">Colossians 2:6-7</span> ,
          <span class="modal-verse" id="Hebrews 12:2">Hebrews 12:2</span> ,
          <span class="modal-verse" id="1 Peter 2:21">1 Peter 2:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Serve God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:25">Exodus 23:25</span> ,
          <span class="modal-verse" id="Deuteronomy 6:13">Deuteronomy 6:13</span> ,
          <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
          <span class="modal-verse" id="Joshua 24:14">Joshua 24:14</span> ,
          <span class="modal-verse" id="1 Samuel 12:20-21">1 Samuel 12:20-21</span> ,
          <span class="modal-verse" id="1 Samuel 12:24">12:24</span> ,
          <span class="modal-verse" id="Hebrews 12:28">Hebrews 12:28</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Abide (be Steadfast)</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Being_Unmoveable.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: being unmoveable</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="John 15:4">John 15:4</span> ,
          <span class="modal-verse" id="1 John 2:24">1 John 2:24</span> ,
          <span class="modal-verse" id="1 John 2:28">2:28</span> ,
          <span class="modal-verse" id="1 Corinthians 15:58">1 Corinthians 15:58</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">16:13</span> ,
          <span class="modal-verse" id="Philippians 4:1">Philippians 4:1</span> ,
          <span class="modal-verse" id="2 Thessalonians 2:15">2 Thessalonians 2:15</span> ,
          <span class="modal-verse" id="Revelation 2:10">Revelation 2:10</span> ,
          <span class="modal-verse" id="Revelation 2:25">2:25</span> ,
          <span class="modal-verse" id="Revelation 3:11">3:11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be temperate (self-controlled and moderate)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 5:23">Galatians 5:23</span> ,
          <span class="modal-verse" id="Philippians 4:5">Philippians 4:5</span> ,
          <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
          <span class="modal-verse" id="Titus 2:2">2:2</span> ,
          <span class="modal-verse" id="2 Peter 1:6">2 Peter 1:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be holy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:44">Leviticus 11:44</span> ,
          <span class="modal-verse" id="Leviticus 19:2">19:2</span> ,
          <span class="modal-verse" id="Leviticus 20:7">20:7</span> ,
          <span class="modal-verse" id="Romans 12:1">Romans 12:1</span> ,
          <span class="modal-verse" id="1 Timothy 1:9">1 Timothy 1:9</span> ,
          <span class="modal-verse" id="1 Timothy 2:8">2:8</span> ,
          <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
          <span class="modal-verse" id="Titus 2:3">2:3</span> ,
          <span class="modal-verse" id="Hebrews 12:14">Hebrews 12:14</span> ,
          <span class="modal-verse" id="1 Peter 1:14-16">1 Peter 1:14-16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be clean (spiritually)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 30:12">Proverbs 30:12</span> ,
          <span class="modal-verse" id="Isaiah 1:16">Isaiah 1:16</span> ,
          <span class="modal-verse" id="2 Corinthians 7:1">2 Corinthians 7:1</span> ,
          <span class="modal-verse" id="James 4:8">James 4:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be filled with the Spirit; Walk in the Spirit; Quench not the Spirit</span>
      <a target="_blank" href="https://www.kjv1611only.com/video/02preaching/Sermons_Pastor_Anderson/Am_I_Filled_With_The_Spirit.mp4">
        <div class="tooltip">
          <ion-icon class="play-button" name="arrow-dropright-circle"></ion-icon>
          <span class="tooltiptext">sermon: am i filled with the spirit</span>
        </div>
      </a>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 5:16">Galatians 5:16</span> ,
          <span class="modal-verse" id="Ephesians 4:22-24">Ephesians 4:22-24</span> ,
          <span class="modal-verse" id="Ephesians 4:30">4:30</span> ,
          <span class="modal-verse" id="Ephesians 5:8">5:8</span> ,
          <span class="modal-verse" id="Ephesians 5:18">5:18</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:19">1 Thessalonians 5:19</span>
        </li>
      </ul>
    <li>
      Resist the devil
      <ul class="styled">
        <li>
          <span class="modal-verse" id="James 4:7">James 4:7</span> ,
          <span class="modal-verse" id="1 Peter 5:8-9">1 Peter 5:8-9</span>
        </li>
      </ul>
    </li>
    </li>
  </ol>
</div>
</body>

</html>