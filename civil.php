<?php include_once 'header.php'; ?>
<!-- FLOAT MENU START -->
<div id="float-menu" class="float-menu">
  <div id="float-toggle" class="float-toggle"></div>
  <ul>

    <?php

    $query = "SELECT * FROM categories WHERE cat = 'Civil Law' ORDER BY section_id ASC";
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
  <h2>Civil Laws</h2>
  <h3 id="01crimes">CRIMES</h3>
  <ol>
    <li>
      <span class="main-li">Role of Governmental bodies</span>
      <ul class="styled">
        <li>
          The role of the government is giving (fair) punishment to
          evildoers and to praise those that do well; life for life, eye
          for eye, tooth for tooth, hand for hand, foot for foot
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 19:21">Deuteronomy 19:21</span> ,
              <span class="modal-verse" id="Proverbs 11:10">Proverbs 11:10</span> ,
              <span class="modal-verse" id="Proverbs 14:34">14:34</span> ,
              <span class="modal-verse" id="Proverbs 20:8">20:8</span> ,
              <span class="modal-verse" id="Proverbs 20:26">20:26</span> ,
              <span class="modal-verse" id="Proverbs 21:11">21:11</span> ,
              <span class="modal-verse" id="Proverbs 25:5">25:5</span> ,
              <span class="modal-verse" id="Romans 13:1-7">Romans 13:1-7</span> ,
              <span class="modal-verse" id="1 Peter 2:14">1 Peter 2:14</span>
            </li>
          </ul>
        </li>
        <li>
          Three main types of punishments: Fines, Death Penalty, and Flogging
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Death Penalty Crimes</span>
      <ul class="styled">
        <li>
          Purpose of the death penalty is to make a public example and requires extreme evidence
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 1:19">Matthew 1:19</span>
            </li>
          </ul>
        </li>
        <li>
          Religious death penalty crimes do not point to forced conversion but rather a ban on certain religions/practices and citizens are allowed to believe whatever they want
        </li>
        <li>
          Murder
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 9:6">Genesis 9:6</span> ,
              <span class="modal-verse" id="Exodus 21:12">Exodus 21:12</span> ,
              <span class="modal-verse" id="Exodus 21:14">21:14</span> ,
              <span class="modal-verse" id="Exodus 21:20">21:20</span> ,
              <span class="modal-verse" id="Exodus 21:22-23">21:22-23</span> ,
              <span class="modal-verse" id="Exodus 21:29">21:29</span> ,
              <span class="modal-verse" id="Leviticus 20:2">Leviticus 20:2</span> ,
              <span class="modal-verse" id="Leviticus 24:17">24:17</span> ,
              <span class="modal-verse" id="Numbers 35:16-18">Numbers 35:16-18</span> ,
              <span class="modal-verse" id="Numbers 35:21">35:21</span> ,
              <span class="modal-verse" id="Numbers 35:30">35:30</span> ,
              <span class="modal-verse" id="Deuteronomy 19:11-13">Deuteronomy 19:11-13</span> ,
              <span class="modal-verse" id="Proverbs 28:17">Proverbs 28:17</span> ,
              Includes abortion: <span class="modal-verse" id="Exodus 21:22-23">Exodus 21:22-23</span>
            </li>
          </ul>
        </li>
        <li>
          Man-stealing (kidnapping, illegal slavery, human trafficking)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:16">Exodus 21:16</span> ,
              <span class="modal-verse" id="Deuteronomy 24:7">Deuteronomy 24:7</span>
            </li>
          </ul>
        </li>
        <li>
          Bestiality
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:19">Exodus 22:19</span> ,
              <span class="modal-verse" id="Leviticus 20:15-16">Leviticus 20:15-16</span>
            </li>
          </ul>
        </li>
        <li>
          Sodomy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 20:13">Leviticus 20:13</span> ,
              <span class="modal-verse" id="Romans 1:32">Romans 1:32</span> ,
              <span class="modal-verse" id="2 Peter 2:6">2 Peter 2:6</span>
            </li>
          </ul>
        </li>
        <li>
          Forcing someone (Rape)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 22:25-27">Deuteronomy 22:25-27</span> ,
              <span class="modal-verse" id="Matthew 18:6">Matthew 18:6</span> ,
              <span class="modal-verse" id="Mark 9:42">Mark 9:42</span> ,
              <span class="modal-verse" id="Luke 17:2">Luke 17:2</span>
            </li>
            <li>
              Note: this would also include pedophilia as a type of rape because children are legally not able to consent
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Corinthians 7:36">1 Corinthians 7:36</span> (she must “pass the flower of her age”)
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Adultery with a married/betrothed woman
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 20:10">Leviticus 20:10</span> ,
              <span class="modal-verse" id="Leviticus 20:20-21">20:20-21</span> ,
              <span class="modal-verse" id="Deuteronomy 22:22-24">Deuteronomy 22:22-24</span> ,
              <span class="modal-verse" id="Job 31:9-11">Job 31:9-11</span>
            </li>
            <li>
              stoned to death with stones
            </li>
          </ul>
        </li>
        <li>
          Lying about your virginity to your father and new husband (public example)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 22:13-21">Deuteronomy 22:13-21</span>
            </li>
          </ul>
        </li>
        <li>
          Incest (in-law or genetic or others’ near of kin)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 18:29">Leviticus 18:29</span> ,
              <span class="modal-verse" id="Leviticus 20:11-12">20:11-12</span> ,
              <span class="modal-verse" id="Leviticus 20:14">20:14</span> ,
              <span class="modal-verse" id="Leviticus 20:17">20:17</span> ,
              <span class="modal-verse" id="Leviticus 20:20-21">20:20-21</span> ,
              <span class="modal-verse" id="1 Corinthians 5:1-5">1 Corinthians 5:1-5</span>
            </li>
            <li>
              both of them would be burnt with fire
            </li>
          </ul>
        </li>
        <li>
          Witchcraft or Wizardry and belonging to an Occult group
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:18">Exodus 22:18</span> ,
              <span class="modal-verse" id="Leviticus 20:27">Leviticus 20:27</span>
            </li>
          </ul>
        </li>
        <li>
          Worshipping, serving, or sacrificing to false gods (devils, idols)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:20">Exodus 22:20</span> ,
              <span class="modal-verse" id="Leviticus 18:21">Leviticus 18:21</span> ,
              <span class="modal-verse" id="Leviticus 20:2">20:2</span> ,
              <span class="modal-verse" id="Deuteronomy 17:3-5">Deuteronomy 17:3-5</span> ,
              <span class="modal-verse" id="Deuteronomy 17:7">17:7</span> ,
              <span class="modal-verse" id="Job 31:26-28">Job 31:26-28</span> ,
              <span class="modal-verse" id="Ezekiel 9:4-7">Ezekiel 9:4-7</span> ,
              <span class="modal-verse" id="Ezekiel 14:10">14:10</span>
            </li>
            <li>
              stone them
            </li>
          </ul>
        </li>
        <li>
          Teaching to serve other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 13:1-11">Deuteronomy 13:1-11</span>
            </li>
            <li>
              stone them
            </li>
          </ul>
        </li>
        <li>
          Speaking in the name of other gods
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 18:20">Deuteronomy 18:20</span> ,
              <span class="modal-verse" id="Ezekiel 14:10">Ezekiel 14:10</span>
            </li>
          </ul>
        </li>
        <li>
          Lying about receiving words from God (false prophesies)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 18:20-22">Deuteronomy 18:20-22</span> ,
              <span class="modal-verse" id="Zechariah 13:3">Zechariah 13:3</span>
            </li>
          </ul>
        </li>
        <li>
          Blaspheming the name of the LORD
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 24:16">Leviticus 24:16</span>
            </li>
            <li>
              stone them
            </li>
          </ul>
        </li>
        <li>
          Cursing your parents
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:17">Exodus 21:17</span> ,
              <span class="modal-verse" id="Leviticus 20:9">Leviticus 20:9</span> ,
              <span class="modal-verse" id="Proverbs 20:20">Proverbs 20:20</span> ,
              <span class="modal-verse" id="Matthew 15:4">Matthew 15:4</span>
            </li>
            <li>
              stone them
            </li>
          </ul>
        </li>
        <li>
          Striking or Attacking your parents
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:15">Exodus 21:15</span>
            </li>
          </ul>
        </li>
        <li>
          Gluttonous and drunkard son refusing to obey his parents after being chastened by them
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 21:18-21">Deuteronomy 21:18-21</span>
            </li>
          </ul>
        </li>
        <li>
          Rejecting the verdict of the judge who speaks from God’s law
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 15:30-31">Numbers 15:30-31</span> ,
              <span class="modal-verse" id="Deuteronomy 17:11-13">Deuteronomy 17:11-13</span> ,
              <span class="modal-verse" id="Hebrews 10:28">Hebrews 10:28</span>
            </li>
          </ul>
        </li>
        <li>
          A False witness who testifies falsely over a death penalty case with intent of getting the accused man a death penalty
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 19:16-21">Deuteronomy 19:16-21</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Perjury</span>
      <ul class="styled">
        <li>
          If one is found to be a false witness he shall be given the same punishment that he thought to have done to the person he witnessed against (generally- beating, fine, or Death Penalty)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 19:16-19">Deuteronomy 19:16-19</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Manslaughter (accidental killing)</span>
      <ul class="styled">
        <li>
          And if a man lie not in wait, but God deliver him into his hand; then I will appoint thee a place whither he shall flee
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:13">Exodus 21:13</span> ,
              <span class="modal-verse" id="Numbers 35:6-34">Numbers 35:6-34</span> ,
              <span class="modal-verse" id="Deuteronomy 4:41-42">Deuteronomy 4:41-42</span> ,
              <span class="modal-verse" id="Deuteronomy 19:2-12">19:2-12</span> ,
              <span class="modal-verse" id="Joshua 20:2-6">Joshua 20:2-6</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Indirect, Negligent Homicide</span>
      <ul class="styled">
        <li>
          Killing someone without intent, and not directly, but through negligence and irresponsibility (this is not manslaughter because it is not direct or there is uncertainty as to who caused the death) equals pay fine or ransom for your life
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 35:31-32">Numbers 35:31-32</span> ,
              <span class="modal-verse" id="Exodus 21:22">Exodus 21:22</span> (unclear who caused),
              <span class="modal-verse" id="Exodus 21:30-32">Exodus 21:30-32</span> (no intent),
              <span class="modal-verse" id="Deuteronomy 22:8">Deuteronomy 22:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">No Fault Deaths</span>
      <ul class="styled">
        <li>
          Self Defense: If a thief be found breaking up, and be smitten that he die, there shall no blood be shed for him
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:2">Exodus 22:2</span>
            </li>
            <li>
              Meaning: this verse is talking about a thief who breaks in at night. You are permitted to kill him in order to protect your family
            </li>
          </ul>
        </li>
        <li>
          If the revenger of blood kills the man slayer, outside a designated city of refuge, he isn’t guilty of a crime
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 35:26-28">Numbers 35:26-28</span>
            </li>
            <li>
              This is later defined as the government’s role: <span class="modal-verse" id="Romans 13:4">Romans 13:4</span>
            </li>
          </ul>
        </li>
        <li>
          If an animal (non-wild) kills someone and the owner showed no negligence: kill the animal but owner goes free
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:28">Exodus 21:28</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Violence causing injury</span>
      <ul class="styled">
        <li>
          Causing injury: pay their medical expense and loss of work time
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:18-21">Exodus 21:18-21</span>
            </li>
          </ul>
        </li>
        <li>
          But if you cause a blemish: as he has done, so shall it be done to him
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:24-25">Exodus 21:24-25</span> ,
              <span class="modal-verse" id="Leviticus 24:19-20">Leviticus 24:19-20</span> ,
              <span class="modal-verse" id="Deuteronomy 25:11-12">Deuteronomy 25:11-12</span>
            </li>
          </ul>
        </li>
        <li>
          And if a Master causes a blemish to his servant then the servant goes free
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:26-27">Exodus 21:26-27</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="02property">PROPERTY</h3>
  <ol>
    <li>
      <span class="main-li">Idolatry Ban</span>
      <ul class="styled">
        <li>
          Destroy idols, altars and groves
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:24">Exodus 23:24</span> ,
              <span class="modal-verse" id="Exodus 34:13">Exodus 34:13</span> ,
              <span class="modal-verse" id="Numbers 33:52">Numbers 33:52</span> ,
              <span class="modal-verse" id="Deuteronomy 7:5">Deuteronomy 7:5</span> ,
              <span class="modal-verse" id="Deuteronomy 7:25">7:25</span> ,
              <span class="modal-verse" id="Deuteronomy 12:2-4">12:2-4</span> ,
              <span class="modal-verse" id="Deuteronomy 13:17">13:17</span> ,
              <span class="modal-verse" id="Deuteronomy 16:21-22">16:21-22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Theft</span>
      <ul class="styled">
        <li>
          Thief restores 5 oxen for an ox that is killed and sold
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:1">Exodus 22:1</span>
            </li>
          </ul>
        </li>
        <li>
          Thief restores 4 sheep for a sheep that is killed and sold
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:1">Exodus 22:1</span> ,
              <span class="modal-verse" id="2 Samuel 12:6">2 Samuel 12:6</span>
            </li>
          </ul>
        </li>
        <li>
          Thief restores 2 times the value of all other stolen property (including if you borrow goods and it is stolen from you; you pay if the thief is not found)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:4">Exodus 22:4</span> ,
              <span class="modal-verse" id="Exodus 22:7-9">22:7-9</span> ,
              <span class="modal-verse" id="Exodus 22:12">22:12</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Debt</span>
      <ul class="styled">
        <li>
          If a thief can’t pay his fine, then he is sold as a servant for his theft (in order to pay off the debt)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:3">Exodus 22:3</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Property Damage</span>
      <ul class="styled">
        <li>
          Restitution for property damage when it’s your fault
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:33-36">Exodus 21:33-36</span> ,
              <span class="modal-verse" id="Exodus 22:5-6">22:5-6</span> ,
              <span class="modal-verse" id="Exodus 22:14">22:14</span> ,
              <span class="modal-verse" id="Leviticus 24:18">Leviticus 24:18</span> ,
              <span class="modal-verse" id="Leviticus 24:21">24:21</span>
            </li>
          </ul>
        </li>
        <li>
          No Restitution for property damage when it’s not your fault
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:10-11">Exodus 22:10-11</span> ,
              <span class="modal-verse" id="Exodus 22:13">22:13</span> ,
              <span class="modal-verse" id="Exodus 22:15">22:15</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="03procedures">PROCEDURES</h3>
  <ol>
    <li>
      <span class="main-li">Civil Authorities</span>
      <ul class="styled">
        <li>
          Judges and officers shalt thou make thee in all thy gates, which the Lord thy God giveth thee, throughout thy tribes (God setup captains of tens, fifties, hundreds, and thousands, and also 70 elders to bear the burden/complaints of the people)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span> ,
              <span class="modal-verse" id="Numbers 11:16">Numbers 11:16</span> ,
              <span class="modal-verse" id="Deuteronomy 1:13">Deuteronomy 1:13</span> ,
              <span class="modal-verse" id="Deuteronomy 16:18">16:18</span>
            </li>
          </ul>
        </li>
        <li>
          Bring complicated court cases to Moses (highest judge- like supreme court)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:22">Exodus 18:22</span> ,
              <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span> ,
              <span class="modal-verse" id="Deuteronomy 17:8-10">17:8-10</span>
            </li>
          </ul>
        </li>
        <li>
          Must be known in the tribes (officers and elders)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 11:16">Numbers 11:16</span> ,
              <span class="modal-verse" id="Deuteronomy 1:13">Deuteronomy 1:13</span> ,
              <span class="modal-verse" id="Deuteronomy 1:15">1:15</span>
            </li>
          </ul>
        </li>
        <li>
          Must be wise
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span> ,
              <span class="modal-verse" id="Deuteronomy 1:13">Deuteronomy 1:13</span> ,
              <span class="modal-verse" id="Proverbs 28:2">Proverbs 28:2</span> ,
              <span class="modal-verse" id="Proverbs 28:16">28:16</span>
            </li>
          </ul>
        </li>
        <li>
          Must rule in the fear of God
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span> ,
              <span class="modal-verse" id="2 Samuel 23:3">2 Samuel 23:3</span> ,
              <span class="modal-verse" id="Proverbs 29:2">Proverbs 29:2</span>
            </li>
          </ul>
        </li>
        <li>
          Must be just (see <a href="moral.php#justice-equity-civil-moral">moral laws of justice or equity</a>)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Samuel 23:3">2 Samuel 23:3</span> ,
              <span class="modal-verse" id="Proverbs 16:12">Proverbs 16:12</span>
            </li>
          </ul>
        </li>
        <li>
          able men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span>
            </li>
          </ul>
        </li>
        <li>
          men of truth
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span>
            </li>
          </ul>
        </li>
        <li>
          must hate covetousness (don't greatly multiply silver and gold)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 18:21">Exodus 18:21</span> ,
              <span class="modal-verse" id="Deuteronomy 17:17">Deuteronomy 17:17</span> ,
              <span class="modal-verse" id="Proverbs 28:16">Proverbs 28:16</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Requirements for Kings (Judicial + Legislative + Executive)</span>
      <ul class="styled">
        <li>
          One from among thy brethren, not a stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:15">Deuteronomy 17:15</span> ,
              <span class="modal-verse" id="Jeremiah 30:21">Jeremiah 30:21</span>
            </li>
          </ul>
        </li>
        <li>
          don't multiply horses (excessive, centralized military build up)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:16">Deuteronomy 17:16</span> ,
              <span class="modal-verse" id="Isaiah 31:1">Isaiah 31:1</span>
            </li>
          </ul>
        </li>
        <li>
          Neither shall he multiply wives to himself (sin of polygamy)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:17">Deuteronomy 17:17</span>
            </li>
          </ul>
        </li>
        <li>
          Must write out a copy of the Bible; keep it with him; and read it all the days of his life
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:18">Deuteronomy 17:18</span> ,
              <span class="modal-verse" id="Deuteronomy 17:19">17:19</span> ,
              <span class="modal-verse" id="Ephesians 6:17">Ephesians 6:17</span> ,
              <span class="modal-verse" id="Deuteronomy 17:19">Deuteronomy 17:19</span> ,
              <span class="modal-verse" id="Acts 17:11">Acts 17:11</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Judicial Procedure</span>
      <ul class="styled">
        <li>
          Requires diligent investigation
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 13:14">Deuteronomy 13:14</span> ,
              <span class="modal-verse" id="Deuteronomy 17:4">17:4</span> ,
              <span class="modal-verse" id="Deuteronomy 19:18">19:18</span> ,
              <span class="modal-verse" id="Proverbs 18:17">Proverbs 18:17</span>
            </li>
          </ul>
        </li>
        <li>
          Judgement must be certain before execution (beyond reasonable doubt)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 13:14">Deuteronomy 13:14</span> ,
              <span class="modal-verse" id="Deuteronomy 17:4">17:4</span>
            </li>
          </ul>
        </li>
        <li>
          Punishment requires 2 witnesses
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 35:30">Numbers 35:30</span> ,
              <span class="modal-verse" id="Deuteronomy 17:6">Deuteronomy 17:6</span> ,
              <span class="modal-verse" id="Deuteronomy 19:15">19:15</span>
            </li>
            <li>
              Note: an object can be a witness
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 22:13">Exodus 22:13</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Executive Procedure
          <ul class="sub">
            <li>
              The witnesses are the first ones to put the guilty to death, then all the people would do the same
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 13:9">Deuteronomy 13:9</span> ,
                  <span class="modal-verse" id="Deuteronomy 17:7">17:7</span>
                </li>
              </ul>
            </li>
            <li>
              The revenger of blood is the one who slays the murder
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Numbers 35:19">Numbers 35:19</span> ,
                  <span class="modal-verse" id="Numbers 35:21"> 35:21</span>
                </li>
                <li>
                  Note: the revenger of blood operates as a government executor
                  <ul class="sub">
                    <li>
                      <span class="modal-verse" id="Romans 13:4">Romans 13:4</span>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              Unsolved murder (region held responsible to investigate)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 21:1-9">Deuteronomy 21:1-9</span>
                </li>
              </ul>
            </li>
            <li>
              His (the one given the death penalty) body shall not remain all night upon the tree, but thou shalt in any wise bury him that day
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 21:22-23">Deuteronomy 21:22-23</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Flogging
          <ul class="sub">
            <li>
              Criminals are beaten in the presence of the judge
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 25:2">Deuteronomy 25:2</span>
                </li>
              </ul>
            </li>
            <li>
              Maximum flogging is 40 stripes
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 25:3">Deuteronomy 25:3</span>
                </li>
              </ul>
            </li>
            <li>
              When to use (not specified): on fools (for harming others)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 22:18-19">Deuteronomy 22:18-19</span> ,
                  <span class="modal-verse" id="Proverbs 10:13">Proverbs 10:13</span> ,
                  <span class="modal-verse" id="Proverbs 18:6">18:6</span> ,
                  <span class="modal-verse" id="Proverbs 19:25">19:25</span> ,
                  <span class="modal-verse" id="Proverbs 19:29">19:29</span> ,
                  <span class="modal-verse" id="Proverbs 26:3">26:3</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Inheritance (land that goes out in the Jubilee)
          <ul class="sub">
            <li>
              Thou shalt not remove thy neighbor’s landmark
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 19:14">Deuteronomy 19:14</span> ,
                  <span class="modal-verse" id="Deuteronomy 27:17">27:17</span> ,
                  <span class="modal-verse" id="Proverbs 22:28">Proverbs 22:28</span> ,
                  <span class="modal-verse" id="Proverbs 23:10-11">23:10-11</span>
                </li>
              </ul>
            </li>
            <li>
              Inheritance chain: First sons, then daughters, then brethren, then father’s brethren, then nearest kinsman (Stays in the family)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Numbers 27:8-11">Numbers 27:8-11</span> ,
                  <span class="modal-verse" id="Joshua 17:3-6">Joshua 17:3-6</span> ,
                  <span class="modal-verse" id="Job 42:15">Job 42:15</span> ,
                  <span class="modal-verse" id="Ezekiel 46:16-18">Ezekiel 46:16-18</span>
                </li>
              </ul>
            </li>
            <li>
              Firstborn son gets double portion
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 21:15-17">Deuteronomy 21:15-17</span>
                </li>
              </ul>
            </li>
            <li>
              Inheritance doesn’t switch between tribes, so if a woman inherits the land then she must marry someone from her tribe
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Numbers 36:6">Numbers 36:6</span>
                </li>
              </ul>
            </li>
            <li>
              Sister in law: no children
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 25:5-10">Deuteronomy 25:5-10</span>
                  <ul class="sub">
                    <li>
                      (voluntary) the purpose is to give one's brother a seed so that his house remains i.e. a child so that his properties can be inherited)
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              Land given to immigrants who beget children in the land (unclaimed)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Ezekiel 47:22-23">Ezekiel 47:22-23</span>
                </li>
                <li>
                  Biblical Principle: A high population is good for a nation (<span class="modal-verse" id="Proverbs 14:28">Proverbs 14:28</span>): A strong country will have a high fertility rate and/or many immigrants
                </li>
                <li>
                  Note: Ezekiel is referring to a time when they were redistributing the land to be settled again
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Marriage
          <ul class="sub">
            <li>
              Let him write her a bill of divorcement (marriage is also a legal construct which gives the government legal authority to prohibit divorce and remarriages based on mosaic prohibitions)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 24:1">Deuteronomy 24:1</span> ,
                  <span class="modal-verse" id="Deuteronomy 24:3">24:3</span> ,
                  <span class="modal-verse" id="Romans 7:2">Romans 7:2</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Fine for fornication
          <ul class="sub">
            <li>
              Pay a dowry/fine for marrying or lying with a virgin: 50 shekels of silver
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 22:17">Exodus 22:17</span> ,
                  <span class="modal-verse" id="Deuteronomy 22:29">Deuteronomy 22:29</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="04sabbath-years">SABBATH YEARS</h3>
  <ol>
    <li>
      <span class="main-li">Note: started once they entered the Promised Land</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 25:2">Leviticus 25:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The law is read every year of release at the feast of tabernacles to all the people in the land</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 31:9-13">Deuteronomy 31:9-13</span> ,
          <span class="modal-verse" id="Nehemiah 8:1-18">Nehemiah 8:1-18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Land Rested</span>
      <ul class="styled">
        <li>
          Work the land 6 years
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:10">Exodus 23:10</span> ,
              <span class="modal-verse" id="Leviticus 25:3">Leviticus 25:3</span>
            </li>
          </ul>
        </li>
        <li>
          The 7th year: thou shall let the land rest and lie still (no sowing, reaping, pruning, gathering)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:11">Exodus 23:11</span> ,
              <span class="modal-verse" id="Leviticus 25:4-5">Leviticus 25:4-5</span> ,
              <span class="modal-verse" id="Leviticus 25:20">25:20</span>
            </li>
          </ul>
        </li>
        <li>
          The increase of the land shall be food for all people and animals therein (including poor people who want to eat from someone’s land)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:6-7">Leviticus 25:6-7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Debts are forgiven</span>
      <ul class="styled">
        <li>
          Every creditor that lends ought unto his neighbor shall release it (except for foreigners) (“exact” means to demand a payment: <span class="modal-verse" id="Isaiah 58:3">Isaiah 58:3</span> , <span class="modal-verse" id="Luke 3:13">Luke 3:13</span>)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:1-3">Deuteronomy 15:1-3</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="05jubilee">JUBILEE</h3>
  <ol>
    <li>
      <span class="main-li">Note: this is in alignment with the Sabbath Years</span>
    </li>
    <li>
      <span class="main-li">The 50TH year shall be a jubilee</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 25:11">Leviticus 25:11</span> ,
          <span class="modal-verse" id="Leviticus 25:12"> 25:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Ye shall hallow the 50TH year</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 25:8">Leviticus 25:8</span> ,
          <span class="modal-verse" id="Leviticus 25:10">25:10</span> ,
          <span class="modal-verse" id="Leviticus 25:12">25:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Blow the trumpet of Jubilee on the day of atonement</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 25:9">Leviticus 25:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Proclaim liberty throughout the land unto all the inhabitants thereof</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 25:10">Leviticus 25:10</span>
        </li>
      </ul>
    </li>
    </ul>
    </li>
    <li>
      <span class="main-li">Land Rested</span>
      <ul class="styled">
        <li>
          Ye shall not sow, neither reap (wild or domestic produce)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:11">Leviticus 25:11</span>
            </li>
          </ul>
        </li>
        <li>
          Eat the increase out of the field
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:12">Leviticus 25:12</span>
            </li>
          </ul>
        </li>
        <li>
          Eat of the old food and storage of the 6TH year until the 9TH year when harvest comes
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:20-22">Leviticus 25:20-22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Land returned to original owner</span>
      <ul class="styled">
        <li>
          Return everyman unto his possession (the possession of his father's) (fields and un-walled cities)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:10">Leviticus 25:10</span> ,
              <span class="modal-verse" id="Leviticus 25:13">25:13</span> ,
              <span class="modal-verse" id="Leviticus 25:28">25:28</span> ,
              <span class="modal-verse" id="Leviticus 25:31">25:31</span> ,
              <span class="modal-verse" id="Leviticus 25:41">25:41</span> ,
              <span class="modal-verse" id="Leviticus 27:24">27:24</span> ,
              <span class="modal-verse" id="Ezekiel 46:16-18">Ezekiel 46:16-18</span>
            </li>
          </ul>
        </li>
        <li>
          You (or your family member) can redeem (buy back) the land you sold (else it goes back during jubilee)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:14-16">Leviticus 25:14-16</span> ,
              <span class="modal-verse" id="Leviticus 25:23-28">25:23-28</span>
            </li>
          </ul>
        </li>
        <li>
          Land and homes within a walled city: you have 1 year to redeem it else the buyer gets to keep it forever (doesn’t go out in jubilee)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:29-31">Leviticus 25:29-31</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Servants Freed</span>
      <ul class="styled">
        <li>
          All the inhabitants of the land go free in the year of jubilee
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:10">Leviticus 25:10</span> ,
              <span class="modal-verse" id="Leviticus 25:39-41">25:39-41</span> ,
              <span class="modal-verse" id="Leviticus 25:54">25:54</span> (with stated exceptions)
            </li>
          </ul>
        </li>
        <li>
          Servants can be redeemed at any point by them or their family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:47-55">Leviticus 25:47-55</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="06servants">SERVANTS</h3>
  <ol>
    <li>
      <span class="main-li">Don’t return runaway slaves/servants</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:15-16">Deuteronomy 23:15-16</span> (example: <span class="modal-verse" id="Philemon 1:16">Philemon 1:16</span>)
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Hebrew servants</span>
      <ul class="styled">
        <li>
          Redeem (buy/pay for) your brother to dwell with you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:35">Leviticus 25:35</span>
            </li>
          </ul>
        </li>
        <li>
          They shall not serve or be sold as a bondservant, but shall serve as a hired servant, and a sojourner
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:39-40">Leviticus 25:39-40</span> ,
              <span class="modal-verse" id="Leviticus 25:42">25:42</span> ,
              <span class="modal-verse" id="Leviticus 25:53">25:53</span> ,
              <span class="modal-verse" id="Deuteronomy 15:15">Deuteronomy 15:15</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not rule over them with rigor
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:43">Leviticus 25:43</span> ,
              <span class="modal-verse" id="Leviticus 25:46">25:46</span> ,
              <span class="modal-verse" id="Leviticus 25:53">25:53</span>
            </li>
          </ul>
        </li>
        <li>
          Hebrew servants are held for a maximum of 6 years
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:2">Exodus 21:2</span> ,
              <span class="modal-verse" id="Deuteronomy 15:12">Deuteronomy 15:12</span> ,
              <span class="modal-verse" id="Deuteronomy 15:18">15:18</span> ,
              <span class="modal-verse" id="Jeremiah 34:8-16">Jeremiah 34:8-16</span>
            </li>
            <li>
              It shall not seem hard unto thee
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 15:18">Deuteronomy 15:18</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          You must send him out liberally
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:13-14">Deuteronomy 15:13-14</span>
            </li>
          </ul>
        </li>
        <li>
          Or the servant gets the option to stay with his Master (signified by an awl through the ear)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:5-6">Exodus 21:5-6</span> ,
              <span class="modal-verse" id="Deuteronomy 15:16-17">Deuteronomy 15:16-17</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Bondmen</span>
      <ul class="styled">
        <li>
          Shall be of the heathen roundabout or of the children of strangers that do sojourn in the land or of the families that are residing in the land (of those may be bought to be a bondman or bondmaiden to be a possession forever)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:42-46">Leviticus 25:42-46</span>
            </li>
            <li>
              note: these people were to assimilate and become citizens
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Genesis 17:12-13">Genesis 17:12-13</span> ,
                  <span class="modal-verse" id="Exodus 12:44">Exodus 12:44</span> ,
                  <span class="modal-verse" id="Exodus 12:48">12:48</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Servant girl you marry</span>
      <ul class="styled">
        <li>
          Note: this is opposed to the hebrew women that serve 6 years (<span class="modal-verse" id="Deuteronomy 15:12">Deuteronomy 15:12</span>)
        </li>
        <li>
          The 6-year limit and Jubilee doesn’t apply
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:7">Exodus 21:7</span> (because she’s your wife)
            </li>
          </ul>
        </li>
        <li>
          Can’t sell her after you marry/betroth her
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:8">Exodus 21:8</span> ,
              <span class="modal-verse" id="Deuteronomy 21:14">Deuteronomy 21:14</span>
            </li>
          </ul>
        </li>
        <li>
          She goes free if
          <ul class="sub">
            <li>
              you don’t delight in her
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 21:8">Exodus 21:8</span> ,
                  <span class="modal-verse" id="Deuteronomy 21:14">Deuteronomy 21:14</span>
                </li>
              </ul>
            </li>
            <li>
              you don’t give her food, clothing, and duty of marriage
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 21:9-11">Exodus 21:9-11</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Her adultery is not punished by death but with a beating
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:20-22">Leviticus 19:20-22</span>
            </li>
          </ul>
        </li>
        <li>
          If a man marries your servant girl, then he has to redeem her and her children for their freedom
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:3-4">Exodus 21:3-4</span>
            </li>
          </ul>
        </li>
        <li>
          Captive in war: she shall shave her hair, pare her nails, and bewail her father and mother for one month before marrying
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 21:10-13">Deuteronomy 21:10-13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="07warfare">WARFARE</h3>
  <ol>
    <li>
      <span class="main-li">Note: Excessive or unprovoked warfare creates long term enemies and is often the downfall of nations</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 25:17-19">Deuteronomy 25:17-19</span> ,
          <span class="modal-verse" id="Habakkuk 2:5-12">Habakkuk 2:5-12</span> ,
          <span class="modal-verse" id="James 4:1">James 4:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Preperation</span>
      <ul class="styled">
        <li>
          For by wise counsel thou shalt make thy war
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 11:14">Proverbs 11:14</span> ,
              <span class="modal-verse" id="Proverbs 20:18">20:18</span> ,
              <span class="modal-verse" id="Proverbs 24:6">24:6</span>
            </li>
          </ul>
        </li>
        <li>
          Be prepared for war (as a nation)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 21:22">Proverbs 21:22</span> ,
              <span class="modal-verse" id="Proverbs 21:31">21:31</span> ,
              <span class="modal-verse" id="Ezekiel 38:7">Ezekiel 38:7</span>
            </li>
          </ul>
        </li>
        <li>
          Be armed (have a weapon)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 3:18">Deuteronomy 3:18</span> ,
              <span class="modal-verse" id="Psalm 149:6">Psalm 149:6</span> ,
              <span class="modal-verse" id="Luke 22:36">Luke 22:36</span> ,
              <span class="modal-verse" id="Luke 22:38">22:38</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Organized Military</span>
      <ul class="styled">
        <li>
          When the officers have made an end of speaking to the people then they make captains of armies to lead the people
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 3:20">Deuteronomy 3:20</span> ,
              <span class="modal-verse" id="Deuteronomy 20:9">20:9</span> ,
              <span class="modal-verse" id="Proverbs 30:27">Proverbs 30:27</span> ,
              <span class="modal-verse" id="Numbers 1:4">Numbers 1:4</span> ,
              <span class="modal-verse" id="Numbers 31:14">31:14</span> ,
              <span class="modal-verse" id="Numbers 31:48">31:48</span> ,
              <span class="modal-verse" id="Joel 3:9-10">Joel 3:9-10</span> ,
              <span class="modal-verse" id="Micah 5:1">Micah 5:1</span>
            </li>
            <li>
              Note: No standing army; army only organizes after the call to war and then disbands afterwards
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Alarm</span>
      <ul class="styled">
        <li>
          Blow an alarm when you need to gather all the people (especially for war)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 10:1-10">Numbers 10:1-10</span> ,
              <span class="modal-verse" id="Numbers 31:6">31:6</span> ,
              <span class="modal-verse" id="Joel 2:1">Joel 2:1</span> ,
              <span class="modal-verse" id="Joel 2:15-16">2:15-16</span> ,
              <span class="modal-verse" id="Joel 3:11">3:11</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sanitary Camping</span>
      <ul class="styled">
        <li>
          Have a shovel; bury your excrement in a designated area
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 23:12-14">Deuteronomy 23:12-14</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Enlistment Requirements</span>
      <ul class="styled">
        <li>
          For males 20 years and up
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 1:3">Numbers 1:3</span>
            </li>
          </ul>
        </li>
        <li>
          Excluded if you have built a new house and have not dedicated it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:5">Deuteronomy 20:5</span>
            </li>
          </ul>
        </li>
        <li>
          Excluded if you have planted a vineyard and have not yet eaten of it
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:6">Deuteronomy 20:6</span>
            </li>
          </ul>
        </li>
        <li>
          Excluded if you are betrothed to a woman and have not taken her or are newly married: within the first year
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:7">Deuteronomy 20:7</span> ,
              <span class="modal-verse" id="Deuteronomy 24:5">24:5</span>
            </li>
          </ul>
        </li>
        <li>
          Excluded if you are fearful and fainthearted
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:8">Deuteronomy 20:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Attitude for war</span>
      <ul class="styled">
        <li>
          Be not afraid of your enemies- trust that God is on your side
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 14:9">Numbers 14:9</span> ,
              <span class="modal-verse" id="Numbers 21:34">21:34</span> ,
              <span class="modal-verse" id="Deuteronomy 20:1">Deuteronomy 20:1</span> ,
              <span class="modal-verse" id="Deuteronomy 9:3-6">9:3-6</span> (answers why),
              <span class="modal-verse" id="Deuteronomy 7:17-19">7:17-19</span> ,
              <span class="modal-verse" id="Deuteronomy 7:21">7:21</span> ,
              <span class="modal-verse" id="Deuteronomy 1:21">1:21</span> ,
              <span class="modal-verse" id="Deuteronomy 1:29">1:29</span> ,
              <span class="modal-verse" id="Deuteronomy 3:2">3:2</span> ,
              <span class="modal-verse" id="Deuteronomy 3:22">3:22</span>
            </li>
          </ul>
        </li>
        <li>
          Encourage soldiers for battle
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:2-4">Deuteronomy 20:2-4</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Cities afar off</span>
      <ul class="styled">
        <li>
          Option 1: peace agreement; they become tributaries
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:10-11">Deuteronomy 20:10-11</span>
            </li>
          </ul>
        </li>
        <li>
          Option 2: war; smite every male; take spoil
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:12-15">Deuteronomy 20:12-15</span>
            </li>
            <li>
              Note: killing women and children is prohibited
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Internal Rebellion</span>
      <ul class="styled">
        <li>
          City given to idolatry results in civil war
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 13:12-17">Deuteronomy 13:12-17</span>
            </li>
            <li>
              destroy, burn, and don’t build again
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Spoils of War</span>
      <ul class="styled">
        <li>
          Eat plundered food (fruit trees, land, etc.)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:14">Deuteronomy 20:14</span> ,
              <span class="modal-verse" id="Deuteronomy 20:19-20">Deuteronomy 20:19-20</span>
            </li>
          </ul>
        </li>
        <li>
          Utilize their resources as weapons/equipment (trees to bulwarks)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:20">Deuteronomy 20:20</span>
            </li>
          </ul>
        </li>
        <li>
          Take all the rest for a reward (women, children, cattle, possessions)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 20:14">Deuteronomy 20:14</span> ,
              <span class="modal-verse" id="Nahum 2:9">Nahum 2:9</span>
            </li>
          </ul>
        </li>
        <li>
          Divide spoil int two halves (1 for the soldiers directly involved, 1 for all the congregation)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 31:25-27">Numbers 31:25-27</span>
            </li>
          </ul>
        </li>
        <li>
          Dedicate a tribute to the Lord (1/500th of the soldiers spoil and 1/50th of the congregation’s spoil)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Numbers 31:28-30">Numbers 31:28-30</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
</div>
</main>
</body>

</html>