<style>
    input.codeableFormInput {
        margin:0;
    }

    .codeableFormError {
        color: #d44;
    }

    .codeableBorderTop {
        border-top: 2px solid rgba(255,255,255,0.1);
    }

    #codeableFormTitle {
        height: 60px;
    }

    #codeableFormDescription {
        height: 160px;
    }

    #codeableFromPoweredBy img {
        margin:0;
    }
</style>

<!-- Do not edit after here -->

<div id="codeableForm" style="display: none; width: 100%;">
  <div id="codeableFormInner" style="margin: 10px;">
    <div>
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">First and last name</div>
      <div style="width: 65%; float: right;">
        <input class="codeableFormInput" id="codeableFormName" type="text" style="width: 100%;" />
        <div class="codeableFormError" id="codeableFormNameError" style="padding-top: 5px; display: none;">Please enter your full name</div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px; padding-top: 10px;">
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">Email</div>
      <div style="width: 65%; float: right;">
        <input class="codeableFormInput"  id="codeableFormEmail" type="text" style="width: 100%;" />
        <div class="codeableFormError" id="codeableFormEmailError" style="padding-top: 5px; display: none;">Please enter your email address</div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px; padding-top: 10px;">
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">Password</div>
      <div style="width: 65%; float: right;">
        <input class="codeableFormInput"  id="codeableFormPassword" type="password" placeholder="We need your password for your new Codeable account" style="width: 100%;" />
        <div class="codeableFormError" id="codeableFormPasswordError" style="padding-top: 5px; display: none;">Password must be at least 6 characters long</div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px; padding-top: 10px;">
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">Please create a title for your task in 140 characters</div>
      <div style="width: 65%; float: right;">
        <textarea id="codeableFormTitle" rows="1" name="title" maxlength="140" placeholder="e.g. I need my WordPress website migrated to WPEngine" style="padding: 8px; width: 100%;"></textarea>
        <div class="codeableFormError" id="codeableFormTitleError" style="padding-top: 5px; display: none;">Please enter a title</div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px; padding-top: 10px;">
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">Describe your task in as much detail as possible</div>
      <div style="width: 65%; float: right;">
        <textarea id="codeableFormDescription" rows="3" name="description" style="padding: 8px; width: 100%"></textarea>
        <div class="codeableFormError" id="codeableFormDescriptionError" style="padding-top: 5px; display: none;">Please enter at least 50 characters</div>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px; padding-top: 10px;">
      <div class="codeableFormLabel" style="width: 30%; float: left; padding-right: 30px;">Please estimate your budget for this task</div>
      <div style="width: 65%; float: right;">
        <select id="codeableFormBudget" style="width: 100%;">
          <option value="-1">less than 200$</option>
          <option value="-2" selected="selected">$200 - $600</option>
          <option value="-3">$600 - $1000</option>
          <option value="-4">more than $1000</option>
        </select>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="codeableBorderTop" style="margin-top: 10px;  padding-top: 10px; width: 100%;">
      <div style="float: right; margin-top: 10px;">
        <p style="padding: 0; margin: 0;">
          <span id="codeableFormInProgress" style="display: none; margin-right: 10px;">Processing, please wait...</span>
          <button id="codeableFormPostButton" style="padding:12px;" class="button">Post your WordPress task</button>
        </p>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div id="codeableFromPoweredBy" style="margin-top: 10px;">
      <p style="text-align: right; font-size: 11px; vertical-align: top;">Powered by our friends at <a href="https://codeable.io" rel="nofollow" target="_blank"><img src="https://s3-us-west-2.amazonaws.com/cdn.codeable.io/images/logo.png" width="80px" alt="Codeable"></a></p>
    </div>
  </div>
</div>

<script>
  window._referooData = {
    partnerId: 98,
    mediumId: 14
  };
</script>

<script type="text/javascript" charset="utf-8">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.id = 'codeableScript';
    var time = +new Date();
    po.src = 'https://s3-us-west-2.amazonaws.com/cdn.codeable.io/scripts/publishTask.js?v=' + time + '&kind=uncategorized&urgency=2&utm_campaign=affiliate&utm_medium=form&utm_source=prothemedesign';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
