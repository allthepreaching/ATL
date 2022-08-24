<?php include_once 'header.php'; ?>
<!-- FLOAT MENU START -->
<div id="float-menu" class="float-menu">
  <div id="float-toggle" class="float-toggle"></div>
  <ul>

    <?php

    $query = "SELECT * FROM categories WHERE cat = 'Ceremonial Law' ORDER BY section_id ASC";
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
  <h2>Ceremonial Laws</h2>
  <h4>
    <mark>
      NOTE: The New Testament references are verses that specifically tell us
      <br>
      these laws have been changed in the New Testament.
    </mark>
  </h4>
  <h3 id="01calendar">Calendar: feasts, holy days, days, months, times, and years</h3>
  <ol>
    <li>
      <span class="main-li">Three times thou shalt keep a feast unto me in the year</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:14">Exodus 23:14</span> ,
          <span class="modal-verse" id="Exodus 34:24">34:24</span> ,
          <span class="modal-verse" id="Deuteronomy 16:16">Deuteronomy 16:16</span> ,
          <span class="modal-verse" id="Nahum 1:15">Nahum 1:15</span>
          <ul class="sub">
            <li>1st: <span class="modal-verse" id="Exodus 23:14">Exodus 23:14</span> ,
              <span class="modal-verse" id="Deuteronomy 16:16">Deuteronomy 16:16</span>
            </li>
            <li>2nd: <span class="modal-verse" id="Exodus 23:15">Exodus 23:15</span> ,
              <span class="modal-verse" id="Exodus 34:22">34:22</span> ,
              <span class="modal-verse" id="Deuteronomy 16:16">Deuteronomy 16:16</span>
            </li>
            <li>3rd: <span class="modal-verse" id="Exodus 23:15">Exodus 23:15</span> ,
              <span class="modal-verse" id="Exodus 34:22">34:22</span> ,
              <span class="modal-verse" id="Deuteronomy 16:13">Deuteronomy 16:13</span> ,
              <span class="modal-verse" id="Deuteronomy 16:16">16:16</span>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">All males shall appear before the LORD</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:17">Exodus 23:17</span> ,
          <span class="modal-verse" id="Exodus 34:23">34:23</span> ,
          <span class="modal-verse" id="Deuteronomy 16:16">Deuteronomy 16:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Blow the Silver Trumpets during solemn feast days and in the beginning of months (over burnt offerings and over sacrifices of peace offerings)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 10:10">Numbers 10:10</span> ,
          <span class="modal-verse" id="Psalm 81:3">Psalm 81:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 14:5">Romans 14:5</span> ,
          <span class="modal-verse" id="1 Corinthians 5:7">1 Corinthians 5:7</span> ,
          <span class="modal-verse" id="Galatians 4:9-10">Galatians 4:9-10</span> ,
          <span class="modal-verse" id="Colossians 2:14-17">Colossians 2:14-17</span> ,
          <span class="modal-verse" id="1 Peter 1:19">1 Peter 1:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Passover (Passover is the first day of the feast of unleavened bread)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ezekiel 45:21">Ezekiel 45:21</span> ,
          <span class="modal-verse" id="Matthew 26:17-21">Matthew 26:17-21</span> ,
          <span class="modal-verse" id="Mark 14:12">Mark 14:12</span> ,
          <span class="modal-verse" id="Luke 22:1">Luke 22:1</span> ,
          <span class="modal-verse" id="Luke 22:7">22:7</span> ,
          <span class="modal-verse" id="Acts 12:3-4">Acts 12:3-4</span>
        </li>
        <li>
          This month (Abib) shall be unto you a beginning of months, it shall be the first month of the year to you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:2">Exodus 12:2</span> ,
              <span class="modal-verse" id="Deuteronomy 16:1">Deuteronomy 16:1</span>
            </li>
            <li>
              Significance: new beginning in Christ (Passover)
            </li>
          </ul>
        </li>
        <li>
          On the 10th day of Abib, take a lamb
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:3">Exodus 12:3</span>
            </li>
            <li>
              Significance: Jesus entered Jerusalem on the 10th
            </li>
          </ul>
        </li>
        <li>
          Lamb must be a first-year male (from sheep or goats)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:5">Exodus 12:5</span>
            </li>
          </ul>
        </li>
        <li>
          Kill the Passover on the 14th in the evening, eat it that night
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:6">Exodus 12:6</span> ,
              <span class="modal-verse" id="Exodus 12:8">12:8</span> ,
              <span class="modal-verse" id="Leviticus 23:5">Leviticus 23:5</span> ,
              <span class="modal-verse" id="Numbers 9:3">Numbers 9:3</span> ,
              <span class="modal-verse" id="Numbers 28:16">28:16</span> ,
              <span class="modal-verse" id="Deuteronomy 16:2">Deuteronomy 16:2</span> ,
              <span class="modal-verse" id="Ezekiel 45:21">Ezekiel 45:21</span>
            </li>
            <li>
              Significance: this foreshadows Jesus' crucifixion week; he entered Jerusalem on the 10TH, was crucified on the 14TH, and the “whole assembly of the congregation of Israel shall kill it (the first-year lamb) in the evening”. The Passover is called a sacrifice in Deuteronomy 16
            </li>
          </ul>
        </li>
        <li>
          Strike Blood on the posts of the door where they eat
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:7">Exodus 12:7</span> ,
              <span class="modal-verse" id="Exodus 12:13">12:13</span>
            </li>
            <li>
              Significance: Jesus sacrificing himself for mankind does mean that everyone is saved: you need a personal application of the blood. The people with the blood on the doorpost were the ones passed over by the angel of death on the first
              Passover
            </li>
          </ul>
        </li>
        <li>
          Eat the Flesh of the Passover Lamb with unleavened bread, and bitter herbs (also don’t eat leavened bread) (start of 7-day feast)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:8">Exodus 12:8</span> ,
              <span class="modal-verse" id="Exodus 13:3">13:3</span> ,
              <span class="modal-verse" id="Exodus 23:18">23:18</span> ,
              <span class="modal-verse" id="Exodus 34:25">34:25</span> ,
              <span class="modal-verse" id="Numbers 9:11">Numbers 9:11</span>
            </li>
            <li>
              Significance: we symbolically eat the Flesh of Jesus in the New Covenant
            </li>
          </ul>
        </li>
        <li>
          Must be roasted with fire: not raw or boiled
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:8-9">Exodus 12:8-9</span> ,
              <span class="modal-verse" id="Deuteronomy 16:7">Deuteronomy 16:7</span>
            </li>
            <li>
              Significance: Jesus went to hell for three days and three nights (<span class="modal-verse" id="Acts 2:31">Acts 2:31</span>)
            </li>
          </ul>
        </li>
        <li>
          His head with his legs and with purtenance thereof
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:9">Exodus 12:9</span>
            </li>
            <li>
              Significance: Jesus’ whole body was sacrificed
            </li>
          </ul>
        </li>
        <li>
          Let none of the Passover remain until the morning, burn the remains with fire
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:10">Exodus 12:10</span> ,
              <span class="modal-verse" id="Exodus 23:18">23:18</span> ,
              <span class="modal-verse" id="Exodus 34:25">34:25</span> ,
              <span class="modal-verse" id="Numbers 9:12">Numbers 9:12</span> ,
              <span class="modal-verse" id="Deuteronomy 16:4">Deuteronomy 16:4</span>
            </li>
            <li>
              Significance: shows that salvation is a one-time thing because the Passover represents Jesus and we're only supposed to eat of it for one meal and burn the leftovers (so that none remains to be eaten thereafter)
            </li>
          </ul>
        </li>
        <li>
          Eat the Passover with haste and with shoes on, loins girded, staff in hand
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:11">Exodus 12:11</span>
            </li>
            <li>
              Significance: shows the children of Israel trusting God to deliver them out of Egypt (bondage) into Freedom
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 12:33">Exodus 12:33</span> ,
                  <span class="modal-verse" id="Exodus 12:42">Exodus 12:42</span> ,
                  <span class="modal-verse" id="Deuteronomy 16:12">Deuteronomy 16:12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Feast of the Passover and the feast of unleavened bread is to be kept throughout all generations forever (a memorial)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:14">Exodus 12:14</span> ,
              <span class="modal-verse" id="Exodus 12:17">Exodus 12:17</span> ,
              <span class="modal-verse" id="Exodus 12:24">Exodus 12:24</span> ,
              <span class="modal-verse" id="Exodus 13:3">Exodus 13:3</span> ,
              <span class="modal-verse" id="Exodus 13:10">Exodus 13:10</span>
            </li>
            <li>
              Significance: it is kept by believers who have received an eternal application of Jesus' blood
            </li>
            <li>
              Egypt is the house of bondage
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 12:17">Exodus 12:17</span> ,
                  <span class="modal-verse" id="Exodus 13:3">13:3</span> ,
                  <span class="modal-verse" id="Exodus 13:14">13:14</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          None of you shall go out of his house until the morning
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:22-23">Exodus 12:22-23</span>
            </li>
            <li>
              Significance: once you were born again in Christ you receive eternal life and you can't lose your salvation
            </li>
          </ul>
        </li>
        <li>
          Tell your children of the Passover
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:26-27">Exodus 12:26-27</span> ,
              <span class="modal-verse" id="Exodus 13:8-9">13:8-9</span> ,
              <span class="modal-verse" id="Exodus 13:14-15">13:14-15</span>
            </li>
            <li>
              Significance: This is one verse that aligns with the Bible teaching that parents should teach their children the things of God. Education begins first at the home, and if a parent leaves their children in the counsel of the ungodly they are setting him up for failure concerning wisdom and right choice of action
            </li>
          </ul>
        </li>
        <li>
          Eat the Passover in the house (with the appropriate number of people, <span class="modal-verse" id="Exodus 12:3-4">Exodus 12:3-4</span>, same as communion)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:46">Exodus 12:46</span>
            </li>
            <li>
              Significance: pictures communion
            </li>
          </ul>
        </li>
        <li>
          Don't break the bones of the Passover
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:46">Exodus 12:46</span> ,
              <span class="modal-verse" id="Numbers 9:12">Numbers 9:12</span>
            </li>
            <li>
              Significance: this foreshadows Jesus being crucified but did not have his bones broken even though it would be customary for the Romans to break the legs to speed up the execution
            </li>
          </ul>
        </li>
        <li>
          No uncircumcised shall eat of the Passover feast
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:43-45">Exodus 12:43-45</span> ,
              <span class="modal-verse" id="Exodus 12:48">Exodus 12:48</span>
            </li>
            <li>
              Significance: communion is only for the saved
            </li>
          </ul>
        </li>
        <li>
          All the congregation of Israel shall keep it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:47">Exodus 12:47</span>
            </li>
          </ul>
        </li>
        <li>
          Those unclean by reason of touching a dead body, or those traveling abroad, shall still keep the Passover on the 14th of the 2nd month
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 9:10-11">Numbers 9:10-11</span>
            </li>
          </ul>
        </li>
        <li>
          Those who are clean and are not traveling abroad at this time and don't keep the Passover in the first month shall be cut off from the children of Israel
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 9:13">Numbers 9:13</span>
            </li>
          </ul>
        </li>
        <li>
          Return to your tents in the morning
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 16:7">Deuteronomy 16:7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Feast of Unleavened Bread</span>
      <ul class="styled">
        <li>
          The Feast of unleavened bread starts on the 15th of Abib (after the 14th day at sunset until the 21st day at sunset)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:18">Exodus 12:18</span> ,
              <span class="modal-verse" id="Exodus 13:5">Exodus 13:5</span> ,
              <span class="modal-verse" id="Leviticus 23:6">Leviticus 23:6</span> ,
              <span class="modal-verse" id="Numbers 28:17">Numbers 28:17</span>
            </li>
          </ul>
        </li>
        <li>
          Eat unleavened bread for 7 days: don’t eat leavened bread
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:15">Exodus 12:15</span> ,
              <span class="modal-verse" id="Exodus 19-20">19-20</span> ,
              <span class="modal-verse" id="Exodus 13:3">13:3</span> ,
              <span class="modal-verse" id="Exodus 13:6-7">13:6-7</span> ,
              <span class="modal-verse" id="Exodus 23:15">23:15</span> ,
              <span class="modal-verse" id="Exodus 23:18">23:18</span> ,
              <span class="modal-verse" id="Exodus 34:18">34:18</span> ,
              <span class="modal-verse" id="Exodus 34:25">34:25</span> ,
              <span class="modal-verse" id="Leviticus 23:6">Leviticus 23:6</span> ,
              <span class="modal-verse" id="Numbers 28:17">Numbers 28:17</span> ,
              <span class="modal-verse" id="Deuteronomy 16:3">Deuteronomy 16:3</span> ,
              <span class="modal-verse" id="Deuteronomy 16:8">16:8</span> ,
              <span class="modal-verse" id="Ezekiel 45:21">Ezekiel 45:21</span>
            </li>
            <li>
              Significance: leaven represents sin (<span class="modal-verse" id="1 Corinthians 5:6-8">1 Corinthians 5:6-8</span>). The reason leaven represents sin is because allowing small amounts of leaven (yeast) can cause it to spread until our whole life is messed up.
              <ul class="styled">
                <li>
                  Note: we should remove sin from our lives
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          No leaven bread within all thy coasts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:19">Exodus 12:19</span> ,
              <span class="modal-verse" id="Exodus 13:7">13:7</span> ,
              <span class="modal-verse" id="Deuteronomy 16:4">Deuteronomy 16:4</span>
            </li>
            <li>
              Note: We should, also, remove temptation to sin from our lives
            </li>
          </ul>
        </li>
        <li>
          Anybody who eats leavened bread during the seven days shall be cut off from Israel
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:15">Exodus 12:15</span> ,
              <span class="modal-verse" id="Exodus 12:19">12:19</span>
            </li>
          </ul>
        </li>
        <li>
          A holy convocation (a holyday/holiday) on the 1st (Passover) and 7th day: which is kept by doing no servile
          work on these two days
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 12:16">Exodus 12:16</span> ,
              <span class="modal-verse" id="Exodus 13:6">13:6</span> ,
              <span class="modal-verse" id="Leviticus 23:7-8">Leviticus 23:7-8</span> ,
              <span class="modal-verse" id="Numbers 28:18">Numbers 28:18</span> ,
              <span class="modal-verse" id="Numbers 28:25">28:25</span> ,
              <span class="modal-verse" id="Deuteronomy 16:8">Deuteronomy 16:8</span>
            </li>
            <li>
              Meaning: being holy means to sanctify or set apart
            </li>
            <li>
              Significance: Salvation is not of works because each day Jesus was in the tomb was a day of rest • The 7th day is a solemn assembly
            </li>
            <li>
              <span class="modal-verse" id="Deuteronomy 16:8">Deuteronomy 16:8</span>
            </li>
          </ul>
        </li>
        <li>
          Give an offering made by fire unto the Lord for 7 Days
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:8">Leviticus 23:8</span> ,
              <span class="modal-verse" id="Ezekiel 45:22">Ezekiel 45:22</span>
            </li>
          </ul>
        </li>
        <li>
          Offer a burnt offering of two young Bullocks, one ram, and seven lambs of the first year
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 28:19">Numbers 28:19</span> ,
              <span class="modal-verse" id="Numbers 28:27">28:27</span>
            </li>
          </ul>
        </li>
        <li>
          Offer a goat for a sin offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 28:22">Numbers 28:22</span> ,
              <span class="modal-verse" id="Numbers 28:30">28:30</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="styled">
            <li>
              <span class="modal-verse" id="John 19:36">John 19:36</span> ,
              <span class="modal-verse" id="1 Corinthians 5:6-8">1 Corinthians 5:6-8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sheaf of first fruits</span>
      <ul class="styled">
        <li>
          It’s on the 17th of Abib: the morrow after the Sabbath after the Passover
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:11">Leviticus 23:11</span> ,
              <span class="modal-verse" id="Leviticus 23:15">23:15</span>
            </li>
            <li>
              Significance: Jesus’ resurrection is three days and three nights after his death
            </li>
          </ul>
        </li>
        <li>
          Reap the Harvest of the land, then bring a sheaf of first fruits of your harvest unto the priest (your first fruits have to get there on the 17th for the ceremony)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:10">Leviticus 23:10</span>
            </li>
            <li>
              Significance: Represents Christ as the sheaf of the first-fruits
            </li>
          </ul>
        </li>
        <li>
          The priests shall wave the sheaf before the Lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:11">Leviticus 23:11</span>
            </li>
          </ul>
        </li>
        <li>
          Offer a lamb of the first year for a burnt offering (when ye wave the sheaf)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:12">Leviticus 23:12</span>
            </li>
          </ul>
        </li>
        <li>
          Offered 2/10 of an ephah of flour mingled with oil for a meat offering (instead of 1/10. See meat offerings)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:13">Leviticus 23:13</span>
            </li>
          </ul>
        </li>
        <li>
          Ye shall eat neither bread, nor parched corn, nor green ears, until the selfsame day that ye have brought an offering unto the Lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:14">Leviticus 23:14</span>
            </li>
          </ul>
        </li>
        <li>
          It shall be a statue forever throughout your generations in all your dwellings
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:14">Leviticus 23:14</span>
            </li>
          </ul>
        </li>
        <li>
          Goes in force when the children of Israel enter into the Promised Land
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:10">Leviticus 23:10</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="styled">
            <li>
              <span class="modal-verse" id="1 Corinthians 15:20">1 Corinthians 15:20</span> ,
              <span class="modal-verse" id="1 Corinthians 15:23">15:23</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">FEAST OF HARVEST/FEAST OF WEEKS/PENTECOST/DAY OF FIRST FRUITS</span>
      <ul class="styled">
        <li>
          Occurs the day after the seventh Sabbath (50 days) from 1st holiday of first fruits; Year by Year
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:15-16">Leviticus 23:15-16</span> ,
              <span class="modal-verse" id="Deuteronomy 16:9-12">Deuteronomy 16:9-12</span> ,
              <span class="modal-verse" id="Deuteronomy 15:20">15:20</span>
            </li>
          </ul>
        </li>
        <li>
          Give a free will offering according to how God has blessed you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 16:10">Deuteronomy 16:10</span>
            </li>
          </ul>
        </li>
        <li>
          Bring your first fruits unto the Lord (without delay)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:29-30">Exodus 22:29-30</span> ,
              <span class="modal-verse" id="Exodus 23:16">23:16</span> ,
              <span class="modal-verse" id="Exodus 23:19">23:19</span> ,
              <span class="modal-verse" id="Exodus 34:22">34:22</span> ,
              <span class="modal-verse" id="Exodus 34:26">34:26</span> ,
              <span class="modal-verse" id="Deuteronomy 16:10">Deuteronomy 16:10</span> ,
              <span class="modal-verse" id="Nehemiah 10:35-37">Nehemiah 10:35-37</span> ,
              <span class="modal-verse" id="Proverbs 3:9">Proverbs 3:9</span>
            </li>
          </ul>
        </li>
        <li>
          Sanctify all the firstborn of men and beasts (present them before God)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 13:2">Exodus 13:2</span> ,
              <span class="modal-verse" id="Exodus 13:12-13">13:12-13</span> ,
              <span class="modal-verse" id="Exodus 34:19">34:19</span> ,
              <span class="modal-verse" id="Deuteronomy 15:19">Deuteronomy 15:19</span> ,
              <span class="modal-verse" id="Luke 2:22-23">Luke 2:22-23</span>
            </li>
          </ul>
        </li>
        <li>
          Do no work with the firstling of the bullock, nor shear the firstling of the sheep
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:19">Deuteronomy 15:19</span>
            </li>
          </ul>
        </li>
        <li>
          Bring in a basket
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 26:2">Deuteronomy 26:2</span>
            </li>
          </ul>
        </li>
        <li>
          If there is too much of the first-fruits to carry (to Jerusalem) then turn it into money and then back into whatever you desire to eat
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 14:24-26">Deuteronomy 14:24-26</span>
            </li>
          </ul>
        </li>
        <li>
          Worship there before God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 26:10">Deuteronomy 26:10</span>
            </li>
          </ul>
        </li>
        <li>
          Say…
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 26:3-10">Deuteronomy 26:3-10</span>
            </li>
          </ul>
        </li>
        <li>
          Redeem the firstborn of man (5 shekels for a 1 month to 5-year-old male)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 13:13">Exodus 13:13</span> ,
              <span class="modal-verse" id="Exodus 13:15">13:15</span> ,
              <span class="modal-verse" id="Exodus 34:20">34:20</span> ,
              <span class="modal-verse" id="Numbers 4:47-48">Numbers 4:47-48</span> ,
              <span class="modal-verse" id="Numbers 18:15-16">18:15-16</span>
            </li>
          </ul>
        </li>
        <li>
          Redeem the firstborn of unclean beasts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 27:27">Leviticus 27:27</span> ,
              <span class="modal-verse" id="Numbers 18:15">Numbers 18:15</span>
            </li>
          </ul>
        </li>
        <li>
          And every firstling of an ass thou shalt redeem with a lamb instead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 13:13">Exodus 13:13</span> ,
              <span class="modal-verse" id="Exodus 34:20">34:20</span>
            </li>
          </ul>
        </li>
        <li>
          If thou wilt not redeem it, then thou shall break its neck
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 13:13">Exodus 13:13</span> ,
              <span class="modal-verse" id="Exodus 34:20">34:20</span>
            </li>
            <li>
              Significance: we’re that ass; either you get redeemed by a lamb (Jesus) or you die unsaved
            </li>
          </ul>
        </li>
        <li>
          Offer the first of your dough as a heave offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 15:19-21">Numbers 15:19-21</span>
            </li>
          </ul>
        </li>
        <li>
          This day is a Holy convocation unto you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:21">Leviticus 23:21</span> ,
              <span class="modal-verse" id="Numbers 28:26">Numbers 28:26</span>
            </li>
          </ul>
        </li>
        <li>
          Ye shall do no servile work therein
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:21">Leviticus 23:21</span> ,
              <span class="modal-verse" id="Numbers 28:26">Numbers 28:26</span>
            </li>
          </ul>
        </li>
        <li>
          It shall be a statute forever in all your dwellings
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:21">Leviticus 23:21</span>
            </li>
          </ul>
        </li>
        <li>
          Offer a new meat offering: ye shall bring out of your habitations two loaves of 2/10 deal of fine flour baked with leaven: they are the first fruits
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:16-17">Leviticus 23:16-17</span>
            </li>
          </ul>
        </li>
        <li>
          Ye shall offer with the bread: 7 lambs of the first year, one young bullock, and two Rams: they are a burnt offering with their meat offering and drink offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:18">Leviticus 23:18</span>
            </li>
          </ul>
        </li>
        <li>
          Then shall ye sacrifice one kid of the goats for a sin offering and two lambs of the first year for a peace offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:19">Leviticus 23:19</span>
            </li>
          </ul>
        </li>
        <li>
          And the priest shall wave them with the bread of first fruits for a wave offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:20">Leviticus 23:20</span>
            </li>
          </ul>
        </li>
        <li>
          Meat offerings of the first fruits are to be green ears of corn: dried by fire, beaten out of full ears with oil and frankincense added (on top of the salt)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 2:14-15">Leviticus 2:14-15</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall burn part of the first fruits
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 2:16">Leviticus 2:16</span>
            </li>
          </ul>
        </li>
        <li>
          Meat offerings to the first fruits are to be offered unto God but not burned onto the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 2:12">Leviticus 2:12</span>
            </li>
          </ul>
        </li>
        <li>
          Sprinkle the blood upon the altar (of first fruit sacrifices)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 18:17">Numbers 18:17</span>
            </li>
          </ul>
        </li>
        <li>
          Burn their fat for an offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 18:17">Numbers 18:17</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="styled">
            <li>
              Fulfilled at Pentecost baptism of the Holy Ghost; reaping a great harvest of souls
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">FEAST OF TRUMPETS</span>
      <ul class="styled">
        <li>
          It’s on the first day of the seventh month
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:24">Leviticus 23:24</span> ,
              <span class="modal-verse" id="Numbers 29:1">Numbers 29:1</span>
            </li>
          </ul>
        </li>
        <li>
          Shall be a Sabbath (day of rest)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:24">Leviticus 23:24</span>
            </li>
          </ul>
        </li>
        <li>
          Trumpets are blown
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:24">Leviticus 23:24</span> ,
              <span class="modal-verse" id="Numbers 29:1">Numbers 29:1</span>
            </li>
          </ul>
        </li>
        <li>
          It’s a holy convocation (set apart)- holyday
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:24">Leviticus 23:24</span> ,
              <span class="modal-verse" id="Numbers 29:1">Numbers 29:1</span>
            </li>
          </ul>
        </li>
        <li>
          Do no servile work therein: get the day off
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:25">Leviticus 23:25</span> ,
              <span class="modal-verse" id="Numbers 29:1">Numbers 29:1</span>
            </li>
          </ul>
        </li>
        <li>
          Offer an offering made by fire: one bullock, one ram, seven lambs of the first year and one kid of a goat
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 29:2">Numbers 29:2</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              Represents the tribulation: multiple trumpets of warfare vs. singular trumpet of the rapture
            </li>
            <li>
              <span class="modal-verse" id="Revelation 2:10">Revelation 2:10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">DAY OF ATONEMENT</span>
      <ul class="styled">
        <li>
          On the 10th day of the seventh month
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:29">Leviticus 16:29</span> ,
              <span class="modal-verse" id="Leviticus 23:27">23:27</span> ,
              <span class="modal-verse" id="Leviticus 23:32">23:32</span> ,
              <span class="modal-verse" id="Numbers 29:7">Numbers 29:7</span>
            </li>
          </ul>
        </li>
        <li>
          It's a holy convocation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:27">Leviticus 23:27</span> ,
              <span class="modal-verse" id="Numbers 29:7">Numbers 29:7</span>
            </li>
          </ul>
        </li>
        <li>
          Shall be a Sabbath
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:31">Leviticus 16:31</span> ,
              <span class="modal-verse" id="Leviticus 23:32">23:32</span>
            </li>
          </ul>
        </li>
        <li>
          Do not work on this day
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:29">Leviticus 16:29</span> ,
              <span class="modal-verse" id="Leviticus 23:28">23:28</span> ,
              <span class="modal-verse" id="Leviticus 23:31">23:31</span> ,
              <span class="modal-verse" id="Leviticus 23:32">23:32</span> ,
              <span class="modal-verse" id="Numbers 29:7">Numbers 29:7</span>
            </li>
          </ul>
        </li>
        <li>
          Everyone must afflict their souls
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:29">Leviticus 16:29</span> ,
              <span class="modal-verse" id="Leviticus 16:31">16:31</span> ,
              <span class="modal-verse" id="Leviticus 23:27">23:27</span> ,
              <span class="modal-verse" id="Leviticus 23:32">23:32</span> ,
              <span class="modal-verse" id="Numbers 29:7">Numbers 29:7</span>
            </li>
          </ul>
        </li>
        <li>
          Whatever soul that is not afflicted shall be cut off
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:29">Leviticus 23:29</span>
            </li>
          </ul>
        </li>
        <li>
          God will destroy any soul doing work on this day because it is a Sabbath
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:30">Leviticus 23:30</span>
            </li>
          </ul>
        </li>
        <li>
          Offer an offering made by fire: one bullock, one ram, seven lambs of the first year, and one kid of the goats
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:27">Leviticus 23:27</span> ,
              <span class="modal-verse" id="Numbers 29:8">Numbers 29:8</span> ,
              <span class="modal-verse" id="Numbers 29:11">29:11</span>
            </li>
          </ul>
        </li>
        <li>
          Sacrifice 1 kid of the goats for a sin offering: beside the sin offering of atonement
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 29:11">Numbers 29:11</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall atone the nation of Israel this day
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:30">Leviticus 16:30</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall come into the holy place: within the vail, before the mercy seat, which is on the ark: only when the cloud of incense is covering the mercy seat
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:2">Leviticus 16:2</span> ,
              <span class="modal-verse" id="Leviticus 16:13">16:13</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall bring a young bullock for a sin offering and a ram for a burnt offering (for himself)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:3">Leviticus 16:3</span>
            </li>
          </ul>
        </li>
        <li>
          The high priests shall put on his holy garments
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:4">Leviticus 16:4</span>
            </li>
          </ul>
        </li>
        <li>
          He shall wash himself before putting on his holy garments
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:4">Leviticus 16:4</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall take from the children of Israel: two kids of goats for a sin offering and 1 ram for a burnt offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:5">Leviticus 16:5</span>
            </li>
          </ul>
        </li>
        <li>
          The high priests shall offer the bullock which is for himself and his house
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:6">Leviticus 16:6</span>
            </li>
          </ul>
        </li>
        <li>
          He shall cast lots (by chance) upon the goats: one for the Lord (as a sin offering) and the other for a scapegoat. The scapegoat shall be presented alive before the Lord to make atonement
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:8-10">Leviticus 16:8-10</span>
            </li>
          </ul>
        </li>
        <li>
          He shall then kill the bullock that was for himself as a sin offering • Leviticus 16:11 19. He shall take a censer full of burning coals off of the Altar and his hands full of sweet incense beaten small, and bring it to the holy place
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:12">Leviticus 16:12</span>
            </li>
          </ul>
        </li>
        <li>
          He shall put the incense upon the fire before the Lord (to make a cloud of incense)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:13">Leviticus 16:13</span>
            </li>
          </ul>
        </li>
        <li>
          He shall take the blood of the bullock and sprinkle it eastward (before the mercy seat) with his finger 7 times
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:14">Leviticus 16:14</span>
            </li>
          </ul>
        </li>
        <li>
          Now he shall kill the goat offered as the sin offering for the people and bring his blood within the vail and sprinkle the blood seven times with his finger, eastward before the mercy seat, and sprinkle it upon the mercy seat
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:15">Leviticus 16:15</span>
            </li>
          </ul>
        </li>
        <li>
          No man shall be in the tabernacle when the high priest goes in
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:17">Leviticus 16:17</span>
            </li>
          </ul>
        </li>
        <li>
          Then he shall go out from the altar that is before the Lord and shall take the blood of the goat and bullock and put it on the horns of the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:10">Exodus 30:10</span> ,
              <span class="modal-verse" id="Leviticus 16:18">Leviticus 16:18</span>
            </li>
          </ul>
        </li>
        <li>
          He shall sprinkle the blood upon his finger 7 times on the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:19">Leviticus 16:19</span>
            </li>
          </ul>
        </li>
        <li>
          When the high priest is done reconciling the holy place, and the tabernacle, and the altar, he shall bring in the Live goat (escape goat) and lay both hands upon his head and confess all the iniquity/transgressions of the children of Israel and shall send him away by the hand of a fit man into the wilderness (so that the goat bears the iniquity of the people)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:20-22">Leviticus 16:20-22</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall come into the Tabernacle of the congregation, take off his linen garments and wash his flesh put on his clothes he was wearing previously and offer his burnt offering and the burnt offering of the people
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:23-24">Leviticus 16:23-24</span>
            </li>
          </ul>
        </li>
        <li>
          The fat of the sin offering shall be upon the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:25">Leviticus 16:25</span>
            </li>
          </ul>
        </li>
        <li>
          He that has the scapegoat shall wash his clothes and bathe his flesh before coming into the camp
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:26">Leviticus 16:26</span>
            </li>
          </ul>
        </li>
        <li>
          Someone shall take the animal remains and burn them. He that does this shall wash his clothes and bathe his flesh before coming into the camp as well
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 16:27-28">Leviticus 16:27-28</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              Represents Jesus as the scapegoat (takes our blame): Represents the rapture/2nd coming
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">FEAST OF INGATHERING/FEAST OF TABERNACLES AND 8TH DAY</span>
      <ul class="styled">
        <li>
          This feast happens on the 15th day of the seventh month
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:34">Leviticus 23:34</span> ,
              <span class="modal-verse" id="Numbers 29:12">Numbers 29:12</span>
            </li>
          </ul>
        </li>
        <li>
          Feast lasts for 7 Days
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:34">Leviticus 23:34</span> ,
              <span class="modal-verse" id="Numbers 29:12">Numbers 29:12</span> ,
              <span class="modal-verse" id="Deuteronomy 16:13">Deuteronomy 16:13</span> ,
              <span class="modal-verse" id="Deuteronomy 16:15">16:15</span>
            </li>
          </ul>
        </li>
        <li>
          First day is a holy convocation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:35">Leviticus 23:35</span> ,
              <span class="modal-verse" id="Numbers 29:12">Numbers 29:12</span>
            </li>
          </ul>
        </li>
        <li>
          The 8th day shall be a holy convocation and solemn assembly
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:36">Leviticus 23:36</span> ,
              <span class="modal-verse" id="Numbers 29:35">Numbers 29:35</span> ,
              <span class="modal-verse" id="Nehemiah 8:18">Nehemiah 8:18</span>
            </li>
          </ul>
        </li>
        <li>
          1st and 8th days are a Sabbath
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:39">Leviticus 23:39</span>
            </li>
          </ul>
        </li>
        <li>
          Do no servile work on the first and eighth day
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:35-36">Leviticus 23:35-36</span> ,
              <span class="modal-verse" id="Numbers 29:12">Numbers 29:12</span> ,
              <span class="modal-verse" id="Numbers 29:35">29:35</span>
            </li>
          </ul>
        </li>
        <li>
          Offer an offering made by fire for 8 days (including day after)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:36">Leviticus 23:36</span>
            </li>
          </ul>
        </li>
        <li>
          Take branches of goodly trees, and of palm trees, and of thick trees, and take willows of the brook and rejoice unto the Lord seven days
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:40">Leviticus 23:40</span>
            </li>
          </ul>
        </li>
        <li>
          Keep forever
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:41">Leviticus 23:41</span>
            </li>
            <li>
              Significance: will be fulfilled in the 2nd coming of Jesus Christ
            </li>
          </ul>
        </li>
        <li>
          All Israelites shall dwell in booths (small shelters) for the seven days
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 23:42-43">Leviticus 23:42-43</span>
            </li>
          </ul>
        </li>
        <li>
          Offer from the first day to the seventh day: 1 kid of the goats, 14 lambs of the first year, 2 rams, 13 to 7 bullocks (one less each day)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 29:13">Numbers 29:13</span> ,
              <span class="modal-verse" id="Numbers 29:16-17">29:16-17</span> ,
              <span class="modal-verse" id="Numbers 29:19-20">29:19-20</span> ,
              <span class="modal-verse" id="Numbers 29:22-23">29:22-23</span> ,
              <span class="modal-verse" id="Numbers 29:25-26">29:25-26</span> ,
              <span class="modal-verse" id="Numbers 29:28-29">29:28-29</span> ,
              <span class="modal-verse" id="Numbers 29:31-32">29:31-32</span> ,
              <span class="modal-verse" id="Numbers 29:34">29:34</span>
            </li>
          </ul>
        </li>
        <li>
          Offer burnt offering on the eighth day: 1 bullock, 1 ram, 7 lambs of the first year, and 1 kid of the goats
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 29:36">Numbers 29:36</span> ,
              <span class="modal-verse" id="Numbers 29:38">29:38</span>
            </li>
          </ul>
        </li>
        <li>
          Give according to your ability
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 16:17">Deuteronomy 16:17</span>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              Represents believers in heaven when God pours out his wrath
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="02circumcision">Circumcision</h3>
  <ol>
    <li>
      <span class="main-li">Every newborn male must be circumcised on the eighth day</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 17:10">Genesis 17:10</span> ,
          <span class="modal-verse" id="Leviticus 12:3">Leviticus 12:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The uncircumcised man child shall be cut off</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 17:14">Genesis 17:14</span>
        </li>
        <li>
          “Cut off” is a removing/shunning; it means you are no longer part of the nation (of Israel)
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 4:4">Jeremiah 4:4</span> ,
              <span class="modal-verse" id="Romans 2:25-29">Romans 2:25-29</span> ,
              <span class="modal-verse" id="Romans 4:1-13">4:1-13</span> ,
              <span class="modal-verse" id="1 Corinthians 7:18-19">1 Corinthians 7:18-19</span> ,
              <span class="modal-verse" id="Galatians 2:3-4">Galatians 2:3-4</span> ,
              <span class="modal-verse" id="Galatians 5:2-6">5:2-6</span> ,
              <span class="modal-verse" id="Galatians 6:15-16">6:15-16</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="03clothing">Clothing</h3>
  <ol>
    <li>
      <span class="main-li">Section 1</span>
      <ul class="styled">
        <li>
          Fringes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 15:38-40">Numbers 15:38-40</span> ,
              <span class="modal-verse" id="Deuteronomy 22:12">Deuteronomy 22:12</span>
            </li>
            <li>
              Significance: This is fulfilled because in the New Covenant the Law is written on our hearts and not on our clothing. The Holy Spirit indwells NT believers and will be a reminder to us instead
            </li>
          </ul>
        </li>
        <li>
          And thou shalt bind them for a sign upon thine hand, and they shall be as frontlets between thine eyes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:8">Deuteronomy 6:8</span> ,
              <span class="modal-verse" id="Deuteronomy 11:18">11:18</span>
              <ul class="styled">
                <li>
                  this command is figurative
                  <ul class="sub">
                    <li>
                      <span class="modal-verse" id="Proverbs 3:3">Proverbs 3:3</span> ,
                      <span class="modal-verse" id="Proverbs 7:2-4">7:2-4</span>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              Significance: This command is spiritual but is often taken as literal/physical as Nicodemus did
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="Proverbs 3:3">Proverbs 3:3</span> ,
                  <span class="modal-verse" id="Proverbs 7:2-4">7:2-4</span> ,
                  <span class="modal-verse" id="John 3:4">John 3:4</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 31:33">Jeremiah 31:33</span> ,
              <span class="modal-verse" id="Romans 2:15">Romans 2:15</span> ,
              <span class="modal-verse" id="Hebrews 10:15-16">Hebrews 10:15-16</span> ,
              <span class="modal-verse" id="John 14:26">John 14:26</span> ,
              <span class="modal-verse" id="Matthew 23:5">Matthew 23:5</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Section 2</span>
      <ul class="styled">
        <li>
          Linen and woolen garment
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:19">Leviticus 19:19</span> ,
              <span class="modal-verse" id="Deuteronomy 22:11">Deuteronomy 22:11</span>
            </li>
            <li>
              Significance: This is a picture of mixing grace and works (Cain and Abel; Adam and Eve). Clothing is a picture of salvation in the bible and believers receive a robe of righteousness from God. Those who don’t receive this wedding garment are cast out into hell
            </li>
          </ul>
        </li>
        <li>
          New Testament
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 3:7">Genesis 3:7</span> ,
              <span class="modal-verse" id="Genesis 3:21">3:21</span> ,
              <span class="modal-verse" id="Genesis 4:3-5">4:3-5</span> ,
              <span class="modal-verse" id="Job 29:14">Job 29:14</span> ,
              <span class="modal-verse" id="Psalm 132:9">Psalm 132:9</span> ,
              <span class="modal-verse" id="Isaiah 61:10">Isaiah 61:10</span> ,
              <span class="modal-verse" id="Revelation 19:8">Revelation 19:8</span> ,
              <span class="modal-verse" id="Matthew 22:11-13">Matthew 22:11-13</span> ,
              <span class="modal-verse" id="Romans 11:6">Romans 11:6</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="04clean-unclean-foods">Clean and unclean foods</h3>
  <ol>
    <li>
      <span class="main-li">unclean food</span>
      <ul class="styled">
        <li>
          <span class="main-li"><span class="modal-verse" id="Leviticus 20:25">Leviticus 20:25</span> ,<span class="modal-verse" id="Deuteronomy 14:3">Deuteronomy 14:3</span></span>
        </li>
        <li>
          <span class="main-li">Beasts: may eat of that which (1) has a parted hoof, (2) is cloven-footed, (3) chews the cud</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 11:2-8">Leviticus 11:2-8</span> ,
              <span class="modal-verse" id="Deuteronomy 14:6-8">Deuteronomy 14:6-8</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Water animals: may eat of that which has (1) fins (2) and scales</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 11:9-12">Leviticus 11:9-12</span> ,
              <span class="modal-verse" id="Deuteronomy 14:9-10">Deuteronomy 14:9-10</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Fowls to not eat</span>
          <ul class="sub">
            <li>
              eagle, ossifrage, osprey, vulture, kite, raven, glede, owl, night hawk, cuckow, hawk, little owl, cormorant, great owl, swan, pelican, gier eagle, stork, heron, lapwing, bat, and any fowl that creeps on all fours
            </li>
            <li>
              <span class="modal-verse" id="Leviticus 11:13-20">Leviticus 11:13-20</span> ,
              <span class="modal-verse" id="Deuteronomy 14:11-20">Deuteronomy 14:11-20</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Flying creeping things that go upon all fours, which have legs above their feet, to leap withal upon the earth</span>
          <ul class="sub">
            <li>
              eat
              <ul class="styled">
                <li>
                  locust, bald locust, beetles, and grasshoppers
                </li>
              </ul>
            </li>
            <li>
              don't eat
              <ul class="styled">
                <li>
                  every other creeping thing
                </li>
              </ul>
            </li>
            <li>
              <span class="modal-verse" id="Leviticus 11:21-24">Leviticus 11:21-24</span> ,
              <span class="modal-verse" id="Leviticus 11:41-44">11:41-44</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don't eat: flesh that is torn of beasts (and cast it to dogs)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 22:31">Exodus 22:31</span> ,
          <span class="modal-verse" id="Leviticus 17:15-16">Leviticus 17:15-16</span> ,
          <span class="modal-verse" id="Leviticus 22:8">22:8</span> ,
          <span class="modal-verse" id="Ezekiel 44:31">Ezekiel 44:31</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don't eat: flesh that dies of itself (Israelites only)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:40">Leviticus 11:40</span> ,
          <span class="modal-verse" id="Leviticus 17:15-16">17:15-16</span> ,
          <span class="modal-verse" id="Leviticus 22:8">22:8</span> ,
          <span class="modal-verse" id="Deuteronomy 14:21">Deuteronomy 14:21</span> ,
          <span class="modal-verse" id="Ezekiel 44:31">Ezekiel 44:31</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don't eat: fat of any animals sacrificed unto the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:17">Leviticus 3:17</span> ,
          <span class="modal-verse" id="Leviticus 7:23-24">7:23-24</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cut off: if you eat the fat of the beast made for an offering</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:25">Leviticus 7:25</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cut off: those who eat/drink blood</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:27">Leviticus 7:27</span> ,
          <span class="modal-verse" id="Leviticus 17:10">17:10</span> ,
          <span class="modal-verse" id="Leviticus 17:14">17:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Whoever eats flesh that dies of itself or is torn of beasts shall wash his clothes and bathe himself in water and be unclean until the even</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:40">Leviticus 11:40</span> ,
          <span class="modal-verse" id="Leviticus 17:15-16">17:15-16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 10:11-15">Acts 10:11-15</span> ,
          <span class="modal-verse" id="Romans 14:1-3">Romans 14:1-3</span> ,
          <span class="modal-verse" id="Romans 14:14">Romans 14:14</span> ,
          <span class="modal-verse" id="Romans 14:20">Romans 14:20</span> ,
          <span class="modal-verse" id="Romans 14:22-23">Romans 14:22-23</span> ,
          <span class="modal-verse" id="Colossians 2:14-17">Colossians 2:14-17</span> ,
          <span class="modal-verse" id="Hebrews 9:10">Hebrews 9:10</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="05diverse-washings">Diverse Washings (ritual uncleanness)</h3>
  <ol>
    <li>
      <span class="main-li">Separate the unclean person from the camp until the sun goes down and they must wash themselves</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 15:31">Leviticus 15:31</span> ,
          <span class="modal-verse" id="Numbers 5:2-4">Numbers 5:2-4</span> ,
          <span class="modal-verse" id="Deuteronomy 23:10-11">Deuteronomy 23:10-11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Whoever or whatever touches any unclean person or thing becomes unclean (and guilty- it is a sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 5:2-3">Leviticus 5:2-3</span> ,
          <span class="modal-verse" id="Leviticus 11:32-34">11:32-34</span> ,
          <span class="modal-verse" id="Leviticus 14:47-57">14:47-57</span> ,
          <span class="modal-verse" id="Leviticus 14:33-57">14:33-57</span> ,
          <span class="modal-verse" id="Leviticus 15:4-11">15:4-11</span> ,
          <span class="modal-verse" id="Numbers 19:22">Numbers 19:22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If an object becomes unclean: break, wash or burn it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:32-33">Leviticus 11:32-33</span> ,
          <span class="modal-verse" id="Leviticus 11:35">11:35</span> ,
          <span class="modal-verse" id="Leviticus 15:12">15:12</span> ,
          <span class="modal-verse" id="Numbers 31:20-23">Numbers 31:20-23</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Touching an animal carcass makes you unclean</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 5:2-3">Leviticus 5:2-3</span> ,
          <span class="modal-verse" id="Leviticus 11:8">11:8</span> ,
          <span class="modal-verse" id="Leviticus 11:24-31">11:24-31</span> ,
          <span class="modal-verse" id="Leviticus 11:36">11:36</span> ,
          <span class="modal-verse" id="Leviticus 11:39-40">11:39-40</span> ,
          <span class="modal-verse" id="Deuteronomy 14:8">Deuteronomy 14:8</span>
        </li>
        <li>
          and must wash clothes if you held it
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Water that touches a carcass becomes unclean except if it is a large body of water</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:35-36">Leviticus 11:35-36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Seed touching carcass also becomes unclean</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 11:37-38">Leviticus 11:37-38</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">After giving birth</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 12:2">Leviticus 12:2</span> ,
          <span class="modal-verse" id="Leviticus 12:4-5">Leviticus 12:4-5</span>
        </li>
        <li>
          offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 12:6">Leviticus 12:6</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sacrifice after her purification</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 12:6">Leviticus 12:6</span> ,
          <span class="modal-verse" id="Leviticus 12:8">12:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t lie with a woman carnally when she is put away for her uncleanness (menstruating woman- 7 days)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 15:19-30">Leviticus 15:19-30</span> ,
          <span class="modal-verse" id="Leviticus 15:33">15:33</span> ,
          <span class="modal-verse" id="Leviticus 18:19">18:19</span> ,
          <span class="modal-verse" id="Leviticus 20:18">20:18</span> ,
          <span class="modal-verse" id="Ezekiel 18:6">Ezekiel 18:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cut off if you lie with a woman when she is put away for her uncleanness</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 20:18">Leviticus 20:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">One is unclean for 7 days if one touches a dead body or for being in a closed vicinity with one (a tent), one must purify himself on the third and seventh day or be cut off from Israel (wash clothes also)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 5:2">Numbers 5:2</span> ,
          <span class="modal-verse" id="Numbers 19:11-20">Numbers 19:11-20</span> ,
          <span class="modal-verse" id="Numbers 31:19-20">Numbers 31:19-20</span> ,
          <span class="modal-verse" id="Numbers 31:24">Numbers 31:24</span> ,
          <span class="modal-verse" id="Ezekiel 44:26">Ezekiel 44:26</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The person who did the sprinkling shall wash his clothes and be unclean until sunset</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 19:21">Numbers 19:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Properly dispose of your excrement</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:12-13">Deuteronomy 23:12-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Uncleanness that chance him by night</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:10-11">Deuteronomy 23:10-11</span> ,
          <span class="modal-verse" id="Leviticus 15:16-18">Leviticus 15:16-18</span> ,
          <span class="modal-verse" id="Leviticus 15:32">15:32</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Leprosy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 5:2">Numbers 5:2</span> ,
          <span class="modal-verse" id="Deuteronomy 24:8-9">Deuteronomy 24:8-9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Bleeding</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 15:1-3">Leviticus 15:1-3</span> ,
          <span class="modal-verse" id="Leviticus 15:13-15">15:13-15</span> ,
          <span class="modal-verse" id="Leviticus 15:32">15:32</span> ,
          <span class="modal-verse" id="Numbers 5:2">Numbers 5:2</span>
        </li>
        <li>
          7 day purification & sacrifice
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 14:14">Romans 14:14</span> ,
          <span class="modal-verse" id="Hebrews 9:10">Hebrews 9:10</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="firstfruits-not-holiday">Firstfruits (Not Holiday)</h3>
  <ol>
    <li>
      <span class="main-li">Fruit from trees planted is counted uncircumcised for three years; all the fruit given from the fourth year as a firstfruit; and only aloud to be eaten from the fifth year forward</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:23-25">Leviticus 19:23-25</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="07immigration-citizenship">Immigration/Citizenship</h3>
  <ol>
    <li>
      <span class="main-li">Persons excluded from the congregation</span>
      <ul class="styled">
        <li>
          He that is wounded in the stones
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 23:1">Deuteronomy 23:1</span>
            </li>
          </ul>
        </li>
        <li>
          A bastard shall not enter into the congregation unto the 10TH generation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 23:2">Deuteronomy 23:2</span>
            </li>
          </ul>
        </li>
        <li>
          An Ammonite or Moabite shall not enter the congregation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 23:3">Deuteronomy 23:3</span> ,
              <span class="modal-verse" id="Nehemiah 13:1">Nehemiah 13:1</span>
            </li>
          </ul>
        </li>
        <li>
          Egyptians or Edomites shall enter the congregation of the Lord in their 3RD generation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 23:8">Deuteronomy 23:8</span>
            </li>
            <li>
              Note: These laws are nation specific and have been replaced by the spiritual kingdom of God
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      New Testament
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Daniel 2:44-45">Daniel 2:44-45</span> ,
          <span class="modal-verse" id="Matthew 21:43">Matthew 21:43</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="09jealous-husband">Jealous Husband</h3>
  <ol>
    <li>
      <span class="main-li">The Law of Jealousies</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 5:12-31">Numbers 5:12-31</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="10offerings-sacrifices">Offerings/Sacrifices</h3>
  <ol>
    <li>
      <span class="main-li">Offer your sacrifices unto the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 28:1">Numbers 28:1</span> ,
          <span class="modal-verse" id="2 Kings 17:36">2 Kings 17:36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Every offering takes place in the place where the Lord thy God shall choose</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:17">Exodus 23:17</span> ,
          <span class="modal-verse" id="Exodus 34:23">34:23</span> ,
          <span class="modal-verse" id="Exodus 34:26">34:26</span> ,
          <span class="modal-verse" id="Deuteronomy 12:5-6">Deuteronomy 12:5-6</span> ,
          <span class="modal-verse" id="Deuteronomy 12:11">12:11</span> ,
          <span class="modal-verse" id="Deuteronomy 12:13-14">12:13-14</span> ,
          <span class="modal-verse" id="Deuteronomy 12:17-18">12:17-18</span> ,
          <span class="modal-verse" id="Deuteronomy 12:26-27">12:26-27</span> ,
          <span class="modal-verse" id="Deuteronomy 14:23">14:23</span> ,
          <span class="modal-verse" id="Deuteronomy 15:20-21">15:20-21</span> ,
          <span class="modal-verse" id="Deuteronomy 16:2">16:2</span> ,
          <span class="modal-verse" id="Deuteronomy 16:5-7">16:5-7</span> ,
          <span class="modal-verse" id="Deuteronomy 16:11">16:11</span> ,
          <span class="modal-verse" id="Deuteronomy 16:16">16:16</span>
        </li>
        <li>
          Note: comes into effect after they enter the land
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 12:8-10">Deuteronomy 12:8-10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Unless the place is too far</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:20-22">Deuteronomy 12:20-22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cut off those who don’t sacrifice at the altar (who are able to)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 17:3-5">Leviticus 17:3-5</span> ,
          <span class="modal-verse" id="Leviticus 17:8-9">17:8-9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">An offering unto the Lord must be of the herd or flock (only designated animals)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 1:2">Leviticus 1:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Eat and rejoice before the Lord (during offerings, holidays, and the tithe day)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:7">Deuteronomy 12:7</span> ,
          <span class="modal-verse" id="Deuteronomy 12:12">12:12</span> ,
          <span class="modal-verse" id="Deuteronomy 12:18">12:18</span> ,
          <span class="modal-verse" id="Deuteronomy 12:27">12:27</span> ,
          <span class="modal-verse" id="Deuteronomy 14:23">14:23</span> ,
          <span class="modal-verse" id="Deuteronomy 14:26">14:26</span> ,
          <span class="modal-verse" id="Deuteronomy 15:20">15:20</span> ,
          <span class="modal-verse" id="Deuteronomy 16:11">16:11</span> ,
          <span class="modal-verse" id="Deuteronomy 16:14-15">16:14-15</span> ,
          <span class="modal-verse" id="Deuteronomy 26:11-12">26:11-12</span> ,
          <span class="modal-verse" id="Nehemiah 8:9-12">Nehemiah 8:9-12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not sacrifice any blemished or deformed animal</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 12:5">Exodus 12:5</span> ,
          <span class="modal-verse" id="Leviticus 1:3">Leviticus 1:3</span> ,
          <span class="modal-verse" id="Leviticus 1:10">1:10</span> ,
          <span class="modal-verse" id="Leviticus 3:1">3:1</span> ,
          <span class="modal-verse" id="Leviticus 4:23">4:23</span> ,
          <span class="modal-verse" id="Leviticus 4:28">4:28</span> ,
          <span class="modal-verse" id="Leviticus 4:32">4:32</span> ,
          <span class="modal-verse" id="Leviticus 5:15">5:15</span> ,
          <span class="modal-verse" id="Leviticus 22:19-25">22:19-25</span> ,
          <span class="modal-verse" id="Deuteronomy 15:21">Deuteronomy 15:21</span> ,
          <span class="modal-verse" id="Deuteronomy 17:1">17:1</span> ,
          <span class="modal-verse" id="Malachi 1:8">Malachi 1:8</span> ,
          <span class="modal-verse" id="Malachi 1:13-14">1:13-14</span>
        </li>
        <li>
          Significance: Jesus as our Passover/Sacrifice had no sin: innocent
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer your bullock or sheep or goat on the 8th day of its life or later (first 7 days the kid is with his/her mother)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 22:30">Exodus 22:30</span> ,
          <span class="modal-verse" id="Leviticus 22:27">Leviticus 22:27</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If you’re supposed to offer a beast but that beast is unclean, then you shall bring it to the priest, who will value it (whether it be good or bad)- sold according to thy estimation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:11-12">Leviticus 27:11-12</span> ,
          <span class="modal-verse" id="Leviticus 27:27">27:27</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The devoted thing (of man, beast, or field) shall not be sold or redeemed (offerings, tithes, sanctified property, first-fruits) (in general)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 13:15">Exodus 13:15</span> ,
          <span class="modal-verse" id="Leviticus 27:10">Leviticus 27:10</span> ,
          <span class="modal-verse" id="Leviticus 27:26">27:26</span> ,
          <span class="modal-verse" id="Leviticus 27:28-29">27:28-29</span> ,
          <span class="modal-verse" id="Leviticus 27:33">27:33</span> ,
          <span class="modal-verse" id="Numbers 18:17">Numbers 18:17</span>
        </li>
        <li>
          If the firstling has a blemish then you eat it within your gates as you would any other meal (don’t sacrifice it: clean and unclean person can eat of it)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 12:15">Deuteronomy 12:15</span> ,
              <span class="modal-verse" id="Deuteronomy 15:21-22">15:21-22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 5:2">Ephesians 5:2</span> ,
          <span class="modal-verse" id="Hebrews 9:12-14">Hebrews 9:12-14</span> ,
          <span class="modal-verse" id="Hebrews 10:2">10:2</span> ,
          <span class="modal-verse" id="Hebrews 10:6-10">10:6-10</span> ,
          <span class="modal-verse" id="1 Peter 1:19">1 Peter 1:19</span> ,
          <span class="modal-verse" id="1 Peter 2:5">2:5</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="11altar-to-god">ALTAR TO GOD</h3>
  <ol>
    <li>
      <span class="main-li">Build an altar of earth unto the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:24">Exodus 20:24</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If making an altar of stone then put a pile of stones together (not using tools which pollute it)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:25">Exodus 20:25</span> ,
          <span class="modal-verse" id="Deuteronomy 27:5">Deuteronomy 27:5</span> ,
          <span class="modal-verse" id="Joshua 8:31">Joshua 8:31</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">No steps before an altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:26">Exodus 20:26</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t plant a grove near the altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 16:21">Deuteronomy 16:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t destroy an altar of the LORD</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:4">Deuteronomy 12:4</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer your sacrifices on the altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:24">Exodus 20:24</span> ,
          <span class="modal-verse" id="Deuteronomy 12:27">Deuteronomy 12:27</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The blood of thy sacrifices shall be poured out upon the altar of the LORD thy God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:27">Deuteronomy 12:27</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="12tithe">TITHE</h3>
  <ol>
    <li>
      <span class="main-li">Bring the tithes every 3 years</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 14:28-29">Deuteronomy 14:28-29</span> ,
          <span class="modal-verse" id="Deuteronomy 26:12">26:12</span> ,
          <span class="modal-verse" id="Amos 4:4">Amos 4:4</span> ,
          <span class="modal-verse" id="Deuteronomy 14:22">Deuteronomy 14:22</span> (bringing forth is yearly)
        </li>
        <li>
          Different in the New Testament
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 16:2">1 Corinthians 16:2</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Say this after the tithe is brought</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 26:13-15">Deuteronomy 26:13-15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If there is too much of the tithe to carry to then turn it into money and then back into whatever you desire to eat</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 14:24-26">Deuteronomy 14:24-26</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t search whether the tithe is good or bad (animals)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:33">Leviticus 27:33</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Levites offer the best tenth of the tithes to the priests (as a heave offering)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 18:26-29">Numbers 18:26-29</span> ,
          <span class="modal-verse" id="Nehemiah 10:38">Nehemiah 10:38</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="13sanctify-a-house">SANCTIFY A HOUSE/FIELD (TO BE THE PRIEST’S POSSESSION)</h3>
  <ol>
    <li>
      <span class="main-li">If a man sanctifies his house to be holy unto God, then the priests shall estimate it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:14">Leviticus 27:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">And if a man sanctifies part of his field then the estimation shall be according to the seed thereof: a homer of barley seed shall be 50 shekels of silver</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:16">Leviticus 27:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If he sanctifies it on the jubilee then the estimation stands</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:17">Leviticus 27:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">But if he sanctifies it after the jubilee then the priest shall reckon unto him money according to the years that remain, and it shall be abated from the estimation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:18">Leviticus 27:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">And if he will not redeem the field or sells the field to another man it shall not be redeemed anymore, but when it goes out in the jubilee it shall be sanctified and be the priest’s</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:20-21">Leviticus 27:20-21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">And if a man sanctify unto the Lord a field which he hath bought, which is not of the fields of his possession; Then the priest shall reckon unto him the worth of thy estimation, even unto the year of the jubilee: and he shall give thine estimation in that day, as a holy thing unto the Lord. In the year of the jubilee the field shall return unto him of whom it was bought, even to him to whom the possession of the land did belong</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:22-24">Leviticus 27:22-24</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="14finding-a-slain-person">FINDING A SLAIN PERSON</h3>
  <ol>
    <li>
      <span class="main-li">Sacrifice heifer and declare innocence</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 21:1-9">Deuteronomy 21:1-9</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="15burnt-offering">BURNT OFFERING</h3>
  <ol>
    <li>
      <span class="main-li">Note: it is called a burnt offering because it is to be roasted on the altar all night until the morning</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 6:9">Leviticus 6:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The priest takes up the ashes and put them beside the altar and carry forth the ashes without the camp</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 6:10-11">Leviticus 6:10-11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The priest that offers the burnt offering keeps the skin of the animal (to sell or own)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:8">Leviticus 7:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burnt sacrifices are voluntary</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 1:3">Leviticus 1:3</span> ,
          <span class="modal-verse" id="Leviticus 22:19">22:19</span>
        </li>
        <li>
          except for ones specifically commanded
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burnt sacrifice of the herd (bullocks)</span>
      <ul class="styled">
        <li>
          Must be a male
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:3">Leviticus 1:3</span>
            </li>
          </ul>
        </li>
        <li>
          Offer it at the door of the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:3">Leviticus 1:3</span>
            </li>
          </ul>
        </li>
        <li>
          The one bringing the offering must put his hand on the bullock's head and kill it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:4-5">Leviticus 1:4-5</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall bring the blood and sprinkle it round about the altar that is by the door of the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:5">Leviticus 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall skin the burnt offering and cut it to pieces
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:6">Leviticus 1:6</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall put fire upon the altar, laying out wood
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:7">Leviticus 1:7</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall lay out the animal parts on the wood which is on the fire
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:8">Leviticus 1:8</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall wash the inward parts and the legs of the animal in water before burning them
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:9">Leviticus 1:9</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burnt sacrifice of the flock (sheep or goats)</span>
      <ul class="styled">
        <li>
          Must be a male
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:10">Leviticus 1:10</span> ,
              <span class="modal-verse" id="Leviticus 22:19">22:19</span>
            </li>
          </ul>
        </li>
        <li>
          Kill it on the side of the altar northward
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:11">Leviticus 1:11</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall sprinkle the blood round about the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:11">Leviticus 1:11</span> ,
              <span class="modal-verse" id="Leviticus 8:19">8:19</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall cut the sacrifice into pieces and lay them on the wood that is on the fire (upon the altar)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:12">Leviticus 1:12</span> ,
              <span class="modal-verse" id="Leviticus 8:20">8:20</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall wash the legs and inwards with water before burning them
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:13">Leviticus 1:13</span> ,
              <span class="modal-verse" id="Leviticus 8:21">8:21</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burnt sacrifice of Fowls (this is for the poor)</span>
      <ul class="styled">
        <li>
          Must be turtledoves or young pigeons (only designated fowl)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:14">Leviticus 1:14</span>
            </li>
          </ul>
        </li>
        <li>
          The priest shall cleave it with the wings (not dividing it) and shall burn it upon the wood of the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:17">Leviticus 1:17</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall pluck out its feathers and take out its crop and put it next to the altar on the east part (by the place of ashes)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:16">Leviticus 1:16</span>
            </li>
          </ul>
        </li>
        <li>
          A priest shall bring it unto the altar and wring off its head and burn it on the altar and the blood thereof shall be wrung out at the side of the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 1:15">Leviticus 1:15</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Continual burnt offering</span>
      <ul class="styled">
        <li>
          Offer 2 lambs of the first-year day by day, continuously
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 29:38">Exodus 29:38</span> ,
              <span class="modal-verse" id="Numbers 28:3">Numbers 28:3</span>
            </li>
          </ul>
        </li>
        <li>
          Offer 1 lamb in the morning and the other at sunset
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 29:39">Exodus 29:39</span> ,
              <span class="modal-verse" id="Numbers 28:4">Numbers 28:4</span> ,
              <span class="modal-verse" id="Ezekiel 46:13-15">Ezekiel 46:13-15</span>
            </li>
          </ul>
        </li>
        <li>
          The fire upon the altar must not go out
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:12-13">Leviticus 6:12-13</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall lay wood on the altar every morning and lay the burnt offering in order upon it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:12">Leviticus 6:12</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Beginning of months burnt offering</span>
      <ul class="styled">
        <li>
          On the first day of each month: offer 2 young bullocks, 1 ram, and 7 lambs of the 1st year
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 28:11">Numbers 28:11</span>
            </li>
          </ul>
        </li>
        <li>
          Offer 1 kid of the goats for a sin offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 28:15">Numbers 28:15</span> ,
              <span class="modal-verse" id="Numbers 28:22-24">28:22-24</span> ,
              <span class="modal-verse" id="Numbers 28:30-31">28:30-31</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="16vows-and-freewill-offerings">Vows And Freewill Offerings</h3>
  <ol>
    <li>
      <span class="main-li">Oblation for all vows and freewill offerings are burnt offerings</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:18">Leviticus 22:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">When a man makes a singular vow: these persons shall give the following estimation to the Lord</span>
      <ul class="styled">
        <li>
          Males 20-60 years: 50 shekels of silver
        </li>
        <li>
          Females 20-60 years: 30 shekels
        </li>
        <li>
          males 5-20 years: 20 shekels
        </li>
        <li>
          females 5-20 years: 10 shekels
        </li>
        <li>
          males 1 month to 5 years old: 5 shekels
        </li>
        <li>
          females 1 month to 5 years old: 3 shekels
        </li>
        <li>
          males older than 60 years: 15 shekels
        </li>
        <li>
          females older than 60 years: 10 shekels
        </li>
        <li>
          <span class="modal-verse" id="Leviticus 27:3-7">Leviticus 27:3-7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If the person is poorer than his estimation, then he shall go before the priest and the priest shall value him according to his ability to give</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:8">Leviticus 27:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not bring the hire of a whore, or the price of a dog into the house of the Lord thy God for any vow</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:18">Deuteronomy 23:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t be slack to pay it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:21-23">Deuteronomy 23:21-23</span> ,
          <span class="modal-verse" id="Nahum 1:15">Nahum 1:15</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="17meat-and-drink-offerings">Meat And Drink Offerings</h3>
  <ol>
    <li>
      <span class="main-li">Note: The meat offering has no animal meat in it. The meat that it’s named after just means food as in <span class="modal-verse" id="Genesis 1:29">Genesis 1:29</span>. The meat offering is a type of bread. (can be baked in a pan or oven, fried in pan). The drink offering didn’t have alcohol in it because that is a sin (see <span class="modal-verse"><a href="#21priests-levites">priests</a></span> , <span class="modal-verse"><a href="moral.php">moral law</a></span>)
    </li>
    <li>
      <span class="main-li">Shall be of fine flour and put oil upon it and put frankincense thereon</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 2:1">Leviticus 2:1</span> ,
          <span class="modal-verse" id="Leviticus 2:6-7">2:6-7</span> ,
          <span class="modal-verse" id="Leviticus 2:15">2:15</span> ,
          <span class="modal-verse" id="Leviticus 6:15">6:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Meat offerings shall have no leaven nor honey</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:18">Exodus 23:18</span> ,
          <span class="modal-verse" id="Leviticus 2:4-5">Leviticus 2:4-5</span> ,
          <span class="modal-verse" id="Leviticus 2:11">Leviticus 2:11</span> ,
          <span class="modal-verse" id="Leviticus 6:17">Leviticus 6:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Season every meat offering with salt</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 2:13">Leviticus 2:13</span> ,
          <span class="modal-verse" id="Mark 9:49">Mark 9:49</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The priests take a handful of the offering and shall burn it upon the altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 2:2">Leviticus 2:2</span> ,
          <span class="modal-verse" id="Leviticus 2:8-9">Leviticus 2:8-9</span> ,
          <span class="modal-verse" id="Leviticus 2:16">Leviticus 2:16</span> ,
          <span class="modal-verse" id="Leviticus 6:14-15">Leviticus 6:14-15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Part (break) it in pieces</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 2:6">Leviticus 2:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The remnant/remainder of the meat offering shall be the priest’s and the high priest’s (all males among the children of Aaron)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 2:3">Leviticus 2:3</span> ,
          <span class="modal-verse" id="Leviticus 2:10">2:10</span> ,
          <span class="modal-verse" id="Leviticus 6:16-18">6:16-18</span> ,
          <span class="modal-verse" id="Leviticus 7:9">7:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The meat offering is divided evenly among the priests</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:10">Leviticus 7:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer a meat offering at every animal sacrifice: 3/10 of an ephah of flour mingled with 1/2 a hin of oil for a bullock, 2/10 of an ephah of flour mingled with 1/3 of a hin of oil for a ram, 1/10 of an ephah of flour mingled with 1/4 of a hin of oil for a lamb/kid (unless otherwise noted)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 29:40">Exodus 29:40</span> ,
          <span class="modal-verse" id="Leviticus 7:11-12">Leviticus 7:11-12</span> ,
          <span class="modal-verse" id="Numbers 15:3-4">Numbers 15:3-4</span> ,
          <span class="modal-verse" id="Numbers 15:6">15:6</span> ,
          <span class="modal-verse" id="Numbers 15:8-9">15:8-9</span> ,
          <span class="modal-verse" id="Numbers 15:11-13">15:11-13</span> ,
          <span class="modal-verse" id="Numbers 28:5">28:5</span> ,
          <span class="modal-verse" id="Numbers 28:12-13">28:12-13</span> ,
          <span class="modal-verse" id="Numbers 28:20-21">28:20-21</span> ,
          <span class="modal-verse" id="Numbers 28:28-29">28:28-29</span> ,
          <span class="modal-verse" id="Numbers 29:3-4">29:3-4</span> ,
          <span class="modal-verse" id="Numbers 29:9-10">29:9-10</span> ,
          <span class="modal-verse" id="Numbers 29:14-15">29:14-15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer a drink offering at every animal sacrifice: 1/2 a hin of wine for a ram, 1/3, of hin of wine for a ram, 1/4 of a hin of wine for lamb (unless otherwise noted)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 15:5">Numbers 15:5</span> ,
          <span class="modal-verse" id="Numbers 15:7">15:7</span> ,
          <span class="modal-verse" id="Numbers 15:10">15:10</span> ,
          <span class="modal-verse" id="Numbers 28:7">28:7</span> ,
          <span class="modal-verse" id="Numbers 28:14">28:14</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="18peace-offering-vow">Peace Offering-Vow & Thanksgiving</h3>
  <ol>
    <li>
      <span class="main-li">Can be either male or female (herd or flock)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:1">Leviticus 3:1</span> ,
          <span class="modal-verse" id="Leviticus 3:6">3:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The person bringing the offering must lay hands on the offering and kill it at the door of the tabernacle</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:2">Leviticus 3:2</span> ,
          <span class="modal-verse" id="Leviticus 3:8">3:8</span> ,
          <span class="modal-verse" id="Leviticus 3:13">3:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The priests and the high priest shall sprinkle the blood upon the altar round about</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:2">Leviticus 3:2</span> ,
          <span class="modal-verse" id="Leviticus 3:8">3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burn on the wood of the altar: the fat that covers the inwards, the fat upon the inwards, the 2 kidneys, the fat on the 2 kidneys (which is by the flanks), and the caul above the liver</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:3-5">Leviticus 3:3-5</span> ,
          <span class="modal-verse" id="Leviticus 3:9-10">3:9-10</span> ,
          <span class="modal-verse" id="Leviticus 3:14-15">3:14-15</span> ,
          <span class="modal-verse" id="Leviticus 6:12">6:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burn the rump also when offering a lamb</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 3:9">Leviticus 3:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer it of your own will</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:5">Leviticus 19:5</span> ,
          <span class="modal-verse" id="Leviticus 22:29">22:29</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Also offer leaved bread (on top of the meat offering) for Thanksgiving peace offering</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:13">Leviticus 7:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">It shall be eaten on the day it is offered and the next day for a vow</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:16">Leviticus 7:16</span> ,
          <span class="modal-verse" id="Leviticus 19:6">19:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The flesh of the sacrifice for his peace offering for thanksgiving shall be eaten the same day that it is offered; none left until the morning</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:15-16">Leviticus 7:15-16</span> ,
          <span class="modal-verse" id="Leviticus 22:30">22:30</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If there are any remains on the third day then it shall be burned with fire</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:17">Leviticus 7:17</span> ,
          <span class="modal-verse" id="Leviticus 19:6">19:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Whoever eats it on the third day shall be cut off from people- profaning the hallowed thing</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:18">Leviticus 7:18</span> ,
          <span class="modal-verse" id="Leviticus 19:7-8">19:7-8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The soul that eats the peace offering, being unclean shall be cut off from his people</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:20-21">Leviticus 7:20-21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">If the sacrifice touches anything unclean it shall not be eaten but burned</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:20-21">Leviticus 7:19</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="19sin-offering">SIN OFFERING</h3>
  <ol>
    <li>
      <span class="main-li">Sin Offering (in general)</span>
      <ul class="styled">
        <li>
          All the priest shall eat the sin offering in the court (except for the priest’s offerings)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:26">Leviticus 6:26</span> ,
              <span class="modal-verse" id="Leviticus 6:29">6:29</span> ,
              <span class="modal-verse" id="Leviticus 7:7">7:7</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t eat the sin offering when the blood is brought into the tent of the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:30">Leviticus 6:30</span>
            </li>
          </ul>
        </li>
        <li>
          Whatever the flesh touches are made holy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:27">Leviticus 6:27</span>
            </li>
          </ul>
        </li>
        <li>
          Wash/cleanse that which the blood touches
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:27-28">Leviticus 6:27-28</span>
            </li>
          </ul>
        </li>
        <li>
          The one(s) bringing the offering shall lay their hands on its head and kill it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:4">Leviticus 4:4</span> ,
              <span class="modal-verse" id="Leviticus 4:14-15">4:14-15</span> ,
              <span class="modal-verse" id="Leviticus 4:24">4:24</span> ,
              <span class="modal-verse" id="Leviticus 4:29">4:29</span> ,
              <span class="modal-verse" id="Leviticus 4:33">4:33</span> ,
              <span class="modal-verse" id="Leviticus 6:25">6:25</span>
            </li>
          </ul>
        </li>
        <li>
          Burn the fat on the altar (including the fat on the internal organs)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:8-10">Leviticus 4:8-10</span> ,
              <span class="modal-verse" id="Leviticus 4:19-20">4:19-20</span> ,
              <span class="modal-verse" id="Leviticus 4:26">4:26</span> ,
              <span class="modal-verse" id="Leviticus 4:31">4:31</span> ,
              <span class="modal-verse" id="Leviticus 4:35">4:35</span> ,
              <span class="modal-verse" id="Leviticus 8:16">8:16</span>
            </li>
          </ul>
        </li>
        <li>
          The priest shall pour some of the blood upon the horns of the altar and pour out the rest at the bottom of the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:7">Leviticus 4:7</span> ,
              <span class="modal-verse" id="Leviticus 4:18">4:18</span> ,
              <span class="modal-verse" id="Leviticus 4:25">4:25</span> ,
              <span class="modal-verse" id="Leviticus 4:30">4:30</span> ,
              <span class="modal-verse" id="Leviticus 4:34">4:34</span> ,
              <span class="modal-verse" id="Leviticus 8:15">8:15</span>
            </li>
          </ul>
        </li>
        <li>
          If not able to afford the sacrifice: Bring 2 turtle doves or 2 young pigeons (1 for a sin offering and 1 for a burnt offering)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:7">Leviticus 5:7</span>
            </li>
          </ul>
        </li>
        <li>
          Offer sin one first, wring off the neck, but don’t divide it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:8">Leviticus 5:8</span>
            </li>
          </ul>
        </li>
        <li>
          (Doves or pigeons): Sprinkle the blood on the sides of the altar; pour out the rest at the bottom of the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:9">Leviticus 5:9</span>
            </li>
          </ul>
        </li>
        <li>
          If not able to bring the doves: then offer 1/10 part of an ephah of fine flour with no oil or frankincense
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:11">Leviticus 5:11</span>
            </li>
          </ul>
        </li>
        <li>
          Bring to the priest to burn on the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 5:12-13">Leviticus 5:12-13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sin offering- priest</span>
      <ul class="styled">
        <li>
          If the priest which is anointed (<span class="modal-verse" id="Leviticus 8:12">Leviticus 8:12</span> , <span class="modal-verse" id="Leviticus 8:30">8:30</span>) sins through ignorance then he shall bring a young bullock for a sin offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:3">Leviticus 4:3</span>
            </li>
          </ul>
        </li>
        <li>
          He shall take the blood, dip his finger in it, and sprinkle it 7 times before the vail of the sanctuary
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:5-6">Leviticus 4:5-6</span>
            </li>
          </ul>
        </li>
        <li>
          Burn the rest of the carcass in a specific location in the camp where you pour out ashes of burnt animals
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:11-12">Leviticus 4:11-12</span> ,
              <span class="modal-verse" id="Leviticus 8:17">8:17</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sin offering-whole congregation of Israel</span>
      <ul class="styled">
        <li>
          Offer a young bullock for a sin offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:14">Leviticus 4:14</span> ,
              <span class="modal-verse" id="Numbers 15:24">Numbers 15:24</span>
            </li>
          </ul>
        </li>
        <li>
          The priest that is anointed shall take the blood, dip his finger in it, and sprinkle it 7 times before the vail of the sanctuary
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:16-17">Leviticus 4:16-17</span> ,
              <span class="modal-verse" id="Numbers 15:25">Numbers 15:25</span>
            </li>
          </ul>
        </li>
        <li>
          Burn the rest of the carcass (in a specific location in the camp where you pour out ashes of burnt animals)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:21">Leviticus 4:21</span>
            </li>
            <li>
              New Testament: without the camp
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 29:14">Exodus 29:14</span> ,
                  <span class="modal-verse" id="Leviticus 16:27">Leviticus 16:27</span> ,
                  <span class="modal-verse" id="Matthew 27:33">Matthew 27:33</span> ,
                  <span class="modal-verse" id="Hebrews 13:11-12">Hebrews 13:11-12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sin Offering-a ruler</span>
      <ul class="styled">
        <li>
          Offer a male kid of the goats
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:23">Leviticus 4:23</span> ,
              <span class="modal-verse" id="Numbers 15:24">Numbers 15:24</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sin offering- any of the common people</span>
      <ul class="styled">
        <li>
          Bring female kid (1st year) of the goats
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 4:28">Leviticus 4:28</span> ,
              <span class="modal-verse" id="Leviticus 4:32">4:32</span> ,
              <span class="modal-verse" id="Leviticus 5:6">5:6</span> ,
              <span class="modal-verse" id="Numbers 15:27">Numbers 15:27</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="20trespass-offering">TRESPASS OFFERING</h3>
  <ol>
    <li>
      <span class="main-li">Make amends: add 1/5 part to the principal and give it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 5:16">Leviticus 5:16</span> ,
          <span class="modal-verse" id="Leviticus 6:5">6:5</span> ,
          <span class="modal-verse" id="Numbers 5:7">Numbers 5:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Give it to the man you sin against (or his kindred), but if you can’t then give to the Priest</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 6:1-5">Leviticus 6:1-5</span> ,
          <span class="modal-verse" id="Numbers 5:7-8">Numbers 5:7-8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Bring trespass offering: a ram with thy estimation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 5:15">Leviticus 5:15</span> ,
          <span class="modal-verse" id="Leviticus 5:18">Leviticus 5:18</span> ,
          <span class="modal-verse" id="Leviticus 6:6">Leviticus 6:6</span> ,
          <span class="modal-verse" id="Leviticus 19:21-22">Leviticus 19:21-22</span> ,
          <span class="modal-verse" id="Numbers 5:7">Numbers 5:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer the ram on the altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:2">Leviticus 7:2</span> ,
          <span class="modal-verse" id="Leviticus 7:5">7:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The blood shall be sprinkled round about the altar</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:2">Leviticus 7:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Offer all the fat, the rump, the fat that covers the inwards, the 2 kidneys, the fat on the kidneys, and the caul</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:3-4">Leviticus 7:3-4</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Every priest shall eat it</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 7:6">Leviticus 7:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes lying with a bondmaid</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:21">Leviticus 19:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes eating an offering unwittingly</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:14-16">Leviticus 22:14-16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes redeeming a beast meant to be for an offering</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:13">Leviticus 27:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes redeeming the house or field you sanctified</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:15">Leviticus 27:15</span> ,
          <span class="modal-verse" id="Leviticus 27:19">27:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes redeeming the firstling</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:27">Leviticus 27:27</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Includes redeeming the tithes</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 27:31">Leviticus 27:31</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="21priests-levites">PRIESTS/LEVITES</h3>
  <ol>
    <li>
      <span class="main-li">Levites</span>
      <ul class="styled">
        <li>
          Note: the priests are of Levi
        </li>
        <li>
          The Levites minister over the tabernacle and the instruments or vessels thereof and to all things that belong to it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 1:50-51">Numbers 1:50-51</span> ,
              <span class="modal-verse" id="Numbers 1:53">1:53</span> ,
              <span class="modal-verse" id="Numbers 3:8">3:8</span>
            </li>
            <li>
              details
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Numbers 3:25-26">Numbers 3:25-26</span> ,
                  <span class="modal-verse" id="Numbers 3:31">3:31</span> ,
                  <span class="modal-verse" id="Numbers 3:36-37">3:36-37</span> ,
                  <span class="modal-verse" id="Numbers 4:2-15">4:2-15</span> ,
                  <span class="modal-verse" id="Numbers 4:24-28">4:24-28</span> ,
                  <span class="modal-verse" id="Numbers 4:31-33">4:31-33</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          They serve at the tabernacle from 25 to 50 years old
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 8:24-25">Numbers 8:24-25</span>
            </li>
          </ul>
        </li>
        <li>
          The Levites are taken instead of all the firstborn of Israel (to serve the priests) and the Levite’s cattle instead of all the firstlings of the cattle of the children of Israel
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 3:12-13">Numbers 3:12-13</span> ,
              <span class="modal-verse" id="Numbers 3:41">3:41</span> ,
              <span class="modal-verse" id="Numbers 3:45">3:45</span> ,
              <span class="modal-verse" id="Numbers 8:16-18">8:16-18</span> ,
              <span class="modal-verse" id="Numbers 18:15">18:15</span>
            </li>
          </ul>
        </li>
        <li>
          All the tribe of Levi shall eat the offerings of the LORD made by fire
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 18:1">Deuteronomy 18:1</span>
            </li>
          </ul>
        </li>
        <li>
          They shall have no inheritance (of land- fields, farms)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 18:20">Numbers 18:20</span> ,
              <span class="modal-verse" id="Deuteronomy 18:1-2">Deuteronomy 18:1-2</span> ,
              <span class="modal-verse" id="Ezekiel 44:28">Ezekiel 44:28</span>
            </li>
          </ul>
        </li>
        <li>
          The Levites and priests while traveling abroad in Israel are to be given food
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 18:6-8">Deuteronomy 18:6-8</span>
            </li>
          </ul>
        </li>
        <li>
          Certain cities and suburb areas are given to the Levites to dwell in
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 35:2-5">Numbers 35:2-5</span>
            </li>
          </ul>
        </li>
        <li>
          Levites however can redeem land sold at any time if in one of their walled cities (however their suburbs are not sold)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:32-34">Leviticus 25:32-34</span>
            </li>
          </ul>
        </li>
        <li>
          The Levites get a tenth (a tithe) as a reward for their service in the tabernacle (from all the children of Israel)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 18:21">Numbers 18:21</span> ,
              <span class="modal-verse" id="Numbers 18:24">18:24</span> ,
              <span class="modal-verse" id="Numbers 18:26">18:26</span> ,
              <span class="modal-verse" id="Numbers 18:28">18:28</span> ,
              <span class="modal-verse" id="Numbers 18:31">18:31</span> ,
              <span class="modal-verse" id="Deuteronomy 12:19">Deuteronomy 12:19</span> ,
              <span class="modal-verse" id="Deuteronomy 14:27">14:27</span> ,
              <span class="modal-verse" id="Deuteronomy 14:29">14:29</span> ,
              <span class="modal-verse" id="Nehemiah 10:37">Nehemiah 10:37</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Priests/High Priest</span>
      <ul class="styled">
        <li>
          Aaron and his sons (the priests) are in charge of the Levites
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 3:6-7">Numbers 3:6-7</span> ,
              <span class="modal-verse" id="Numbers 3:9">3:9</span> ,
              <span class="modal-verse" id="Numbers 3:32">3:32</span> ,
              <span class="modal-verse" id="Numbers 4:16">4:16</span> ,
              <span class="modal-verse" id="Numbers 4:19">4:19</span> ,
              <span class="modal-verse" id="Numbers 4:27">4:27</span> ,
              <span class="modal-verse" id="Numbers 8:19">8:19</span> ,
              <span class="modal-verse" id="Numbers 18:2-4">18:2-4</span> ,
              <span class="modal-verse" id="Numbers 18:6">18:6</span>
            </li>
          </ul>
        </li>
        <li>
          Only the priests work in the sanctuary and the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 18:3-5">Numbers 18:3-5</span>
            </li>
          </ul>
        </li>
        <li>
          Priests are not to drink wine nor strong drink when approaching the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 10:9">Leviticus 10:9</span> ,
              <span class="modal-verse" id="Ezekiel 44:21">Ezekiel 44:21</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall burn sweet incense upon the furniture piece described in v.1-6
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:7-8">Exodus 30:7-8</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t offer strange incense nor burnt sacrifice nor meat offering nor drink offering on that furniture piece
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:9">Exodus 30:9</span>
            </li>
          </ul>
        </li>
        <li>
          The priests shall wash his feet in the brass basin described in v.18 before going to the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:18-21">Exodus 30:18-21</span>
            </li>
          </ul>
        </li>
        <li>
          Set up the shewbread table
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 25:30">Exodus 25:30</span>
            </li>
          </ul>
        </li>
        <li>
          Israelites shall bring pure olive oil (beaten for the light) for Aaron and his sons who are to make sure the lamp will burn continuously
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 27:20-21">Exodus 27:20-21</span> ,
              <span class="modal-verse" id="Leviticus 24:2-4">Leviticus 24:2-4</span>
            </li>
          </ul>
        </li>
        <li>
          Every Sabbath the priests shall eat 12 cakes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 24:5-9">Leviticus 24:5-9</span>
            </li>
          </ul>
        </li>
        <li>
          The priests eat the offerings in the court of the tabernacle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:16">Leviticus 6:16</span> ,
              <span class="modal-verse" id="Numbers 18:10">Numbers 18:10</span>
            </li>
          </ul>
        </li>
        <li>
          The priests get every offering (for everyone in their house that is clean) and every hallowed thing and every devoted thing
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 29:33">Exodus 29:33</span> ,
              <span class="modal-verse" id="Leviticus 7:7-10">Leviticus 7:7-10</span> ,
              <span class="modal-verse" id="Leviticus 7:37">7:37</span> ,
              <span class="modal-verse" id="Leviticus 27:29">27:29</span> ,
              <span class="modal-verse" id="Numbers 5:9-10">Numbers 5:9-10</span> ,
              <span class="modal-verse" id="Numbers 18:8-15">18:8-15</span> (best of the wine, oil, and wheat),
              <span class="modal-verse" id="Numbers 18:18-19">18:18-19</span> ,
              <span class="modal-verse" id="Deuteronomy 18:4">Deuteronomy 18:4</span> ,
              <span class="modal-verse" id="Ezekiel 44:29-30">Ezekiel 44:29-30</span> ,
              <span class="modal-verse" id="Leviticus 7:29-34">Leviticus 7:29-34</span> (get the breast and right shoulder of the peace offering),
              <span class="modal-verse" id="Deuteronomy 18:3">Deuteronomy 18:3</span> (get the shoulder, the two cheeks, and the maw of offerings in general)
            </li>
          </ul>
        </li>
        <li>
          The priests must wear the garments described in Exodus 28:1-42 when they come into the tabernacle or near the altar (and only then)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 28:43">Exodus 28:43</span> ,
              <span class="modal-verse" id="Leviticus 6:10-11">Leviticus 6:10-11</span> ,
              <span class="modal-verse" id="Leviticus 21:12">21:12</span> ,
              <span class="modal-verse" id="Ezekiel 42:14">Ezekiel 42:14</span> ,
              <span class="modal-verse" id="Ezekiel 44:17-19">44:17-19</span>
            </li>
          </ul>
        </li>
        <li>
          The priest shall not uncover his head nor rend his clothes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 10:6">Leviticus 10:6</span> ,
              <span class="modal-verse" id="Leviticus 21:10">21:10</span>
            </li>
          </ul>
        </li>
        <li>
          Anointing oil: don’t pour on man’s flesh or make an oil like it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:32">Exodus 30:32</span>
            </li>
          </ul>
        </li>
        <li>
          Cut off if you compound a similar oil or if you put the oil on a stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:33">Exodus 30:33</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t replicate priest’s perfume
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:37">Exodus 30:37</span>
            </li>
          </ul>
        </li>
        <li>
          Cut off those who replicate the perfume
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 30:38">Exodus 30:38</span>
            </li>
          </ul>
        </li>
        <li>
          No priest shall be defiled for dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:1">Leviticus 21:1</span> ,
              <span class="modal-verse" id="Leviticus 21:4">21:4</span> ,
              <span class="modal-verse" id="Ezekiel 44:25">Ezekiel 44:25</span>
            </li>
          </ul>
        </li>
        <li>
          Except for his kin that is near unto him he may be defiled for the dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:2-3">Leviticus 21:2-3</span> ,
              <span class="modal-verse" id="Ezekiel 44:25">Ezekiel 44:25</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest must not defile himself for the dead: even for his family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:11">Leviticus 21:11</span>
            </li>
          </ul>
        </li>
        <li>
          Priests shall be holy unto God, because they perform offerings
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:6">Leviticus 21:6</span> ,
              <span class="modal-verse" id="Leviticus 21:8">21:8</span>
            </li>
          </ul>
        </li>
        <li>
          The priest must not go out of the sanctuary/tabernacle (while ministering)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 10:7">Leviticus 10:7</span> ,
              <span class="modal-verse" id="Leviticus 21:12">21:12</span>
            </li>
          </ul>
        </li>
        <li>
          The priest must not profane the sanctuary
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:12">Leviticus 21:12</span>
            </li>
          </ul>
        </li>
        <li>
          The high priest shall not profane his seed among the people
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:15">Leviticus 21:15</span>
            </li>
          </ul>
        </li>
        <li>
          Any priest with a blemish cannot approach the altar
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:17-23">Leviticus 21:17-23</span>
            </li>
          </ul>
        </li>
        <li>
          Take a virgin for a wife (No whore, profane, divorced, widowed woman)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21:7">Leviticus 21:7</span> ,
              <span class="modal-verse" id="Leviticus 21:14">21:14</span> ,
              <span class="modal-verse" id="Ezekiel 44:22">Ezekiel 44:22</span>
            </li>
          </ul>
        </li>
        <li>
          Teach the people
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 10:10-11">Leviticus 10:10-11</span> ,
              <span class="modal-verse" id="Ezekiel 22:26">Ezekiel 22:26</span> ,
              <span class="modal-verse" id="Ezekiel 44:23">44:23</span> ,
              <span class="modal-verse" id="Malachi 2:7">Malachi 2:7</span>
            </li>
            <li>
              Note: the priest and Levites help the judge to judge from the law
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 17:8-11">Deuteronomy 17:8-11</span> ,
                  <span class="modal-verse" id="Deuteronomy 19:17">Deuteronomy 19:17</span> ,
                  <span class="modal-verse" id="Ezekiel 44:24">Ezekiel 44:24</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Whore daughter burned
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 21">Leviticus 21</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sanctify (Not Profaning) The Offering</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:2">Leviticus 22:2</span> ,
          <span class="modal-verse" id="Leviticus 22:15">22:15</span>
        </li>
        <li>
          The priest must be clean when eating the offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 22:4-7">Leviticus 22:4-7</span>
            </li>
          </ul>
        </li>
        <li>
          No stranger may eat of the offering (only people of the priest’s household may eat of it; family, bond/Hebrew servants)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 22:10-13">Leviticus 22:10-13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">RITUAL FOR PRIEST’S ANOINTMENT</span>
      <ul class="styled">
        <li>
          They shall offer a meat offering of 1/10 part of ephah of fine flour; perpetual half in the morning, half at night
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:20">Leviticus 6:20</span>
            </li>
          </ul>
        </li>
        <li>
          Make in a pan with oil
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:21">Leviticus 6:21</span>
            </li>
          </ul>
        </li>
        <li>
          The newly anointed priest shall offer it himself
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:22">Leviticus 6:22</span>
            </li>
          </ul>
        </li>
        <li>
          It shall be wholly burnt and not eaten
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:23">Leviticus 6:23</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Hebrews 2:17">Hebrews 2:17</span> ,
          <span class="modal-verse" id="Hebrews 3:1">3:1</span> ,
          <span class="modal-verse" id="Hebrews 4:14">4:14</span> ,
          <span class="modal-verse" id="Hebrews 5:1">5:1</span> ,
          <span class="modal-verse" id="Hebrews 5:5-6">5:5-6</span> ,
          <span class="modal-verse" id="Hebrews 6:20">6:20</span> ,
          <span class="modal-verse" id="Hebrews 6:7">6:7</span> ,
          <span class="modal-verse" id="Hebrews 8:1-6">8:1-6</span> ,
          <span class="modal-verse" id="Hebrews 9:11">9:11</span> ,
          <span class="modal-verse" id="1 Peter 2:5">1 Peter 2:5</span> ,
          <span class="modal-verse" id="1 Peter 2:9">2:9</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="22red-heifer">Red heifer</h3>
  <ol>
    <li>
      <span class="modal-verse" id="Numbers 19:2-10">Numbers 19:2-10</span>
    </li>
    <li>
      <span class="main-li">Note: this is for purifying those unclean by touching a corpse (v. 17)</span>
    </li>
  </ol>
  <h3 id="23sabbath">Sabbath</h3>
  <ol>
    <li>
      <span class="main-li">Remember the sabbath day, to keep it holy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:8-11">Exodus 20:8-11</span> ,
          <span class="modal-verse" id="Exodus 23:12">23:12</span> ,
          <span class="modal-verse" id="Exodus 31:13-17">31:13-17</span> ,
          <span class="modal-verse" id="Exodus 34:21">34:21</span> ,
          <span class="modal-verse" id="Exodus 35:2">35:2</span> ,
          <span class="modal-verse" id="Leviticus 19:3">Leviticus 19:3</span> ,
          <span class="modal-verse" id="Leviticus 19:30">19:30</span> ,
          <span class="modal-verse" id="Leviticus 23:3">23:3</span> ,
          <span class="modal-verse" id="Leviticus 26:2">26:2</span> ,
          <span class="modal-verse" id="Deuteronomy 5:13-14">Deuteronomy 5:13-14</span>
        </li>
        <li>
          <span class="main-li">And on the seventh day thou shalt rest</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:10-11">Exodus 20:10-11</span> ,
              <span class="modal-verse" id="Exodus 23:12">23:12</span> ,
              <span class="modal-verse" id="Exodus 31:15">31:15</span> ,
              <span class="modal-verse" id="Exodus 31:17">31:17</span> ,
              <span class="modal-verse" id="Exodus 34:21">34:21</span> ,
              <span class="modal-verse" id="Exodus 35:2">35:2</span> ,
              <span class="modal-verse" id="Leviticus 23:3">Leviticus 23:3</span> ,
              <span class="modal-verse" id="Deuteronomy 5:13-14">Deuteronomy 5:13-14</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Six days shalt thou labour</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:9">Exodus 20:9</span> ,
              <span class="modal-verse" id="Exodus 23:12">23:12</span> ,
              <span class="modal-verse" id="Exodus 31:15">31:15</span> ,
              <span class="modal-verse" id="Exodus 34:21">34:21</span> ,
              <span class="modal-verse" id="Exodus 35:2">35:2</span> ,
              <span class="modal-verse" id="Leviticus 23:3">Leviticus 23:3</span> ,
              <span class="modal-verse" id="Deuteronomy 5:13">Deuteronomy 5:13</span>
            </li>
            <li>
              This is a max not a min (compare with <span class="modal-verse" id="Exodus 21:2">Exodus 21:2</span> wording)
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Example of work: lighting a fire on the sabbath day</span>
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 35:3">Exodus 35:3</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="main-li">Everybody rests including your beasts, servants, children, and even the strangers among you</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Whoever doesn't keep the Sabbath shall be put to death</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 31:14-15">Exodus 31:14-15</span> ,
          <span class="modal-verse" id="Exodus 35:2">35:2</span> ,
          <span class="modal-verse" id="Numbers 15:35">Numbers 15:35</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Burnt offering for every Sabbath: 2 lambs of the first year</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 28:9-10">Numbers 28:9-10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 14:5">Romans 14:5</span> ,
          <span class="modal-verse" id="Colossians 2:14-17">Colossians 2:14-17</span> ,
          <span class="modal-verse" id="Hebrews 4:3-11">Hebrews 4:3-11</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="24tabernacle-sanctuary">Tabernacle/Sanctuary</h3>
  <ol>
    <li>
      <span class="main-li">Revere my sanctuary</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:30">Leviticus 19:30</span> ,
          <span class="modal-verse" id="Leviticus 26:2">26:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The stranger or children of Israel (non-Levites) that come to the tabernacle shall be put to death</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 1:51">Numbers 1:51</span> ,
          <span class="modal-verse" id="Numbers 3:10">3:10</span> ,
          <span class="modal-verse" id="Numbers 3:38">3:38</span> ,
          <span class="modal-verse" id="Numbers 4:20">4:20</span> ,
          <span class="modal-verse" id="Numbers 17:13">17:13</span> ,
          <span class="modal-verse" id="Numbers 18:22">18:22</span> ,
          <span class="modal-verse" id="Ezekiel 44:9">Ezekiel 44:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cut off: an unclean person who comes in</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:3">Leviticus 22:3</span> ,
          <span class="modal-verse" id="Numbers 19:13">Numbers 19:13</span> ,
          <span class="modal-verse" id="Numbers 19:20">19:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">When counting the people: half shekel tax for service of the tabernacle</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 30:12-16">Exodus 30:12-16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Hebrews 8:2">Hebrews 8:2</span> ,
          <span class="modal-verse" id="Hebrews 9:1">Hebrews 9:1</span> ,
          <span class="modal-verse" id="Hebrews 9:9">Hebrews 9:9</span> ,
          <span class="modal-verse" id="Hebrews 13:10">Hebrews 13:10</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="25vows">Vows</h3>
  <ol>
    <li>
      <span class="main-li">In General</span>
      <ul class="styled">
        <li>
          Swear by God’s name
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:13">Deuteronomy 6:13</span> ,
              <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
              <span class="modal-verse" id="Jeremiah 12:16">Jeremiah 12:16</span>
            </li>
            <li>
              Meaning: your oaths are made unto the Lord
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Nazarite Vow</span>
      <ul class="styled">
        <li>
          The Nazarite must not drink strong drink
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 6:3">Numbers 6:3</span>
            </li>
          </ul>
        </li>
        <li>
          The Nazarite must not eat or drink anything derived from grapes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 6:3-4">Numbers 6:3-4</span>
            </li>
          </ul>
        </li>
        <li>
          The Nazarite must not cut or shave his hair
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 6:5">Numbers 6:5</span>
            </li>
          </ul>
        </li>
        <li>
          The Nazarite must not touch a dead body
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 6:6-7">Numbers 6:6-7</span>
            </li>
          </ul>
        </li>
        <li>
          When completing the vow (by choice or by disqualification): shave your head, offer the offering described
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 6:9-20">Numbers 6:9-20</span> (afterward he may drink wine)
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:33-37">Matthew 5:33-37</span> ,
          <span class="modal-verse" id="James 5:12">James 5:12</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="26warfare-conquering-canaan">Warfare (Conquering Canaan)</h3>
  <ol>
    <li>
      <span class="main-li">Show no mercy unto them</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 7:2">Deuteronomy 7:2</span> ,
          <span class="modal-verse" id="Deuteronomy 7:16">7:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Destroy everyone</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:31">Exodus 23:31</span> ,
          <span class="modal-verse" id="Deuteronomy 7:2">Deuteronomy 7:2</span> ,
          <span class="modal-verse" id="Deuteronomy 7:16">7:16</span> ,
          <span class="modal-verse" id="Deuteronomy 20:16-17">20:16-17</span> ,
          <span class="modal-verse" id="Deuteronomy 25:17-19">25:17-19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt make no covenant with them</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:32">Exodus 23:32</span> ,
          <span class="modal-verse" id="Exodus 34:12">34:12</span> ,
          <span class="modal-verse" id="Exodus 34:15">34:15</span> ,
          <span class="modal-verse" id="Deuteronomy 7:2">Deuteronomy 7:2</span> ,
          <span class="modal-verse" id="Deuteronomy 23:6">23:6</span> ,
          <span class="modal-verse" id="Joshua 23:7">Joshua 23:7</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="27remembering-history-culture">Remembering History (Culture)</h3>
  <ol>
    <li>
      <span class="main-li">Recite Song of Moses (for Israelites)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 31:19">Deuteronomy 31:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Remember you were bondmen in Egypt</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 5:15">Deuteronomy 5:15</span> ,
          <span class="modal-verse" id="Deuteronomy 24:18">24:18</span> ,
          <span class="modal-verse" id="Deuteronomy 24:22">24:22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Tell your son why we keep God’s commandments: because He brought us out of Egypt</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:20-25">Deuteronomy 6:20-25</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Remember how God led us in the wilderness 40 years</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 8:2">Deuteronomy 8:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t say in your heart that God casts out the Canaanite for your righteousness</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 9:4">Deuteronomy 9:4</span> ,
          <span class="modal-verse" id="Deuteronomy 9:6">9:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t forget the covenant that God made (with Israel)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Kings 17:38">2 Kings 17:38</span> ,
          <span class="modal-verse" id="1 Chronicles 16:15">1 Chronicles 16:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">New Testament</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 2:11-19">Ephesians 2:11-19</span> ,
          <span class="modal-verse" id="1 Peter 2:9-10">1 Peter 2:9-10</span>
        </li>
        <li>
          any Law that makes a distinction between Jews + non-Jews: laws for Jews only
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="28misc">Misc</h3>
  <ol>
    <li>
      <span class="main-li">[The King] Nor cause the people to return to Egypt (to the end that he may multiply horses)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 17:16">Deuteronomy 17:16</span> ,
          <span class="modal-verse" id="2 Chronicles 9:28">2 Chronicles 9:28</span> ,
          <span class="modal-verse" id="Isaiah 31:1">Isaiah 31:1</span>
        </li>
        <li>
          This is selling his people back into slavery
        </li>
      </ul>
    </li>
  </ol>
</div>
</main>
</body>

</html>