<?php snippet('header') ?>


    
    <div class="main">
        <div class="section section-nude">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="fixed-section">
                    <ul>
                        <li><a href="#buttons-row">Buttons</a></li>
                        <li><a href="#checkbox-row">Checkbox/Radio</a></li>
                        <li><a href="#dropdown-row">Dropdown</a></li>
                        <li><a href="#inputs-row">Inputs</a></li>
                        <li><a href="#textarea-row">Textarea</a></li>
                        <li><a href="#navbar-row">Navigation</a></li>
                        <li><a href="#subscription-row">Footers</a></li>
                        <li><a href="#pagination-row">Pagination</a></li>
                        <li><a href="#progressbar-row">Progress Bars</a></li>
                        <li><a href="#sliders-row">Sliders</a></li>
                        <li><a href="#labels-row">Labels</a></li>
                        <li><a href="#datepicker-row">Datepicker</a></li>
                        <li><a href="#modal-row">Modals</a></li>
                        <li><a href="#tooltip-row">Tooltips/Popovers</a></li>
                        <li><a href="#notification-row">Notification</a></li>
        
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container" style="min-height: 2000px;">
    
    <!-- buttons row -->
        <div class="tim-row" id="buttons-row">
            
                <h2>Buttons </h2>
                <legend></legend>
                <h4>Colors</h4>
                    <p>
                    We worked over the original Bootstrap classes, choosing a different color pallete. We opted for this beautiful scheme of pale colors:
                    </p>
                    <p>
                       <button class="btn btn-default">Default</button>
                       <button class="btn btn-primary">Primary</button>
                       <button class="btn btn-info">Info</button>
                       <button class="btn btn-success">Success</button>
                       <button class="btn btn-warning">Warning</button>
                       <button class="btn btn-danger">Danger</button>
                       <button class="btn btn-neutral">Neutral</button>
                       
                    </p>
                    <br />
                    <div class="area-line">
                    <a data-target="#buttonColor" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonColor" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-neutral&quot;&gt;Neutral&lt;/button&gt;
    </pre>
    </div>            
                    </div>
                <h4>Sizes</h4>
                    <p>
                        Buttons come in all needed sizes:
                    </p>
                    <p>
                        <button class="btn btn-primary btn-lg">Large</button>
                        <button class="btn btn-primary">Normal</button>
                        <button class="btn btn-primary btn-sm">Small</button>
                        <button class="btn btn-primary btn-xs">Extra Small</button>
                    </p>
                    <div class="area-line">
                    <a data-target="#buttonSize" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonSize" class="collapse">         
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-primary&quot;&gt;Normal&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-primary btn-sm&quot;&gt;Small&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-primary btn-xs&quot;&gt;Extra Small&lt;/button&gt;
    </pre>
    </div>
                    </div>
                <h4>Styles</h4>
                    <p class="space-top">
                        We added extra classes that can help you better customise the look. You can use regular buttons, filled buttons or plain link buttons. Let's see some examples:
                    </p>
                    <p>
                        <button class="btn btn-primary">Default</button>
                        <button class="btn btn-primary btn-fill">Filled</button>
                        <button class="btn btn-primary btn-simple">Simple</button>
                    </p>
                    <div class="area-line">
                    <a data-target="#buttonStyle" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                    </a>
    <div id="buttonStyle" class="collapse">
    <pre class="prettyprint">
    &lt;button class=&quot;btn btn-primary&quot;&gt;Default&lt;/button&gt;
    
    &lt;button class=&quot;btn btn-primary btn-fill&quot;&gt;Filled&lt;/button&gt;
        
    &lt;button class=&quot;btn btn-primary btn-simple&quot;&gt;Simple&lt;/button&gt;   
    </pre>
    </div>
                    </div>
                    <p class="space-top">
                        Button groups, toolbars, and disabled state all work like they are supposed to.
                    </p>
                    
        </div>
    <!--     end row -->
    
    <!-- checkbox row -->
        <div class="tim-row" id="checkbox-row">
                <h2> Checkboxes </h2>
                <legend></legend>
                <p>
                    To use the custom checkboxes, you need to import a separate Javascript file called 'ct-paper-checkbox.js'.
                </p>
                <p>
                      <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                        Unchecked
                      </label>
                      <label class="checkbox" for="checkbox2">
                        <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                        Checked
                      </label>
                      <label class="checkbox" for="checkbox3">
                        <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled>
                        Disabled unchecked
                      </label>
                      <label class="checkbox" for="checkbox4">
                        <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" disabled checked>
                        Disabled checked
                      </label>
                </p>
                <p>Usage can be done via Data Attributes: 
                <a data-target="#checkboxDataAttribute" href="javascript: void(0);" data-toggle="collapse">
                          See example.
                </a>
                </p>
    <div id="checkboxDataAttribute" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox1&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox1&quot; data-toggle=&quot;checkbox&quot;&gt;
    
        Unchecked
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox2&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox2&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Checked
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox3&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox3&quot; data-toggle=&quot;checkbox&quot; disabled&gt;
    
        Disabled unchecked
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox&quot; for=&quot;checkbox4&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox4&quot; data-toggle=&quot;checkbox&quot; disabled checked&gt;
    
        Disabled checked
    
    &lt;/label&gt;
    
    </pre>
    </div>
                <p>Or can be called via Javascript:
                <a data-target="#checkboxJavascript" href="javascript: void(0);" data-toggle="collapse">
                          See example.
                </a>
                </p>
    <div id="checkboxJavascript" class="collapse">           
    <pre class="prettyprint">
    $(':checkbox').checkbox();
    </pre>
    </div>
                <p>
                    We added more classes to provide you with choices
                </p>
                
                         <label class="checkbox checkbox-blue" for="checkbox1">
                            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox" checked>
                            Blue
                         </label>
                         <label class="checkbox checkbox-azure" for="checkbox2">
                            <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
                            Azure
                         </label>
                         <label class="checkbox checkbox-green" for="checkbox3">
                            <input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" checked>
                            Green
                         </label>
                         <label class="checkbox checkbox-orange" for="checkbox4">
                            <input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" checked>
                            Orange
                         </label>
                         <label class="checkbox checkbox-red" for="checkbox5">
                            <input type="checkbox" value="" id="checkbox5" data-toggle="checkbox" checked>
                            Red
                         </label>
                         <div class="area-line">
                         <a data-target="#checkboxColor" href="javascript: void(0);" data-toggle="collapse">
                          See Full Implementation
                         </a>
    <div id="checkboxColor" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;checkbox checkbox-blue&quot; for=&quot;checkbox1&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox1&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Blue
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox checkbox-azure&quot; for=&quot;checkbox2&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox2&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Azure
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox checkbox-green&quot; for=&quot;checkbox3&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox3&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Green
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox checkbox-orange&quot; for=&quot;checkbox4&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox4&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Orange
    
    &lt;/label&gt;
    
    &lt;label class=&quot;checkbox checkbox-red&quot; for=&quot;checkbox5&quot;&gt;
    
        &lt;input type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;checkbox5&quot; data-toggle=&quot;checkbox&quot; checked&gt;
    
        Red
    
    &lt;/label&gt;
    </pre>
    </div>
                         </div>            
                <p>
                    <h4>Methods</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.checkbox('toggle')</b>
                            is used to toggle the states between checked and unchecked.
                        </li>
                        <li>
                            <b>.checkbox('check') </b>
                            sets the checkbox state to checked.
                        </li>
                        <li>
                            <b>.checkbox('uncheck') </b>
                            sets the state to unchecked.
                        </li>
                    </ul>
                    <div class="area-line">
                    <a data-target="#checkboxMethod" href="javascript: void(0);" data-toggle="collapse">
                          See coded example
                    </a>
    <div id="checkboxMethod" class="collapse">             
    <pre class="prettyprint">
    $(':checkbox').checkbox('check');
    </pre>
    </div>
                    </div>
                    <h4>Events</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.on('toggle') </b>
                            gets activated when the checkbox state changes between checked and unchecked.                        
                        </li>
                        <li>
                            <b>.on('change') </b>
                            the same as toggle.
                        </li>
                    </ul>
                </p>
                <div class="area-line">
                <a data-target="#checkboxEvent" href="javascript: void(0);" data-toggle="collapse">
                      See coded example
                </a>
    <div id="checkboxEvent" class="collapse">  
    <pre class="prettyprint">
    $(':checkbox').on('toggle', function() {
      // Do something
    });
    </pre>
    </div>
                </div>
            
        </div>
    <!-- end row -->
    
    <!-- radio row -->
        <div class="tim-row" id="radio-row">
            <h2> Radio Buttons </h2>
            <legend></legend>
                <p>
                    To use the custom radio buttons, you need to import a separate Javascript file called 'ct-paper-radio.js'.
                </p>
                <p>
                   <label class="radio">
                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                    <i></i>Radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                    <i></i>Radio is on
                  </label>
        
                  <label class="radio">
                    <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios3" value="option2" disabled>
                    <i></i>Disabled radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" name="optionsRadiosDisabled" data-toggle="radio" id="optionsRadios4" value="option2" checked disabled>
                    <i></i>Disabled radio is on
                  </label>
                </p>
                <p>Usage can be done via Data Attributes: <a data-target="#radioDataAttribute" href="javascript: void(0);" data-toggle="collapse">See example.</a></p>
    <div id="radioDataAttribute" class="collapse">          
    <pre class="prettyprint">
    &lt;label class=&quot;radio&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios1&quot; value=&quot;option1&quot;&gt;
    
        &lt;i&gt;&lt;/i&gt;Radio is off
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio&quot;&gt;   
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios2&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Radio is on
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios3&quot; value=&quot;option2&quot; disabled&gt;
    
        &lt;i&gt;&lt;/i&gt;Disabled radio is off
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadiosDisabled&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios4&quot; value=&quot;option2&quot; checked disabled&gt;
    
        &lt;i&gt;&lt;/i&gt;Disabled radio is on
    
    &lt;/label&gt;
    </pre>
    </div>
                <p>Or can be called via Javascript: <a data-target="#radioJavascript" href="javascript: void(0);" data-toggle="collapse">See example.</a> </p>
    <div id="radioJavascript" class="collapse">            
    <pre class="prettyprint">
    $(':radio').radio();
    </pre>
    </div>
                <p>
                    You can choose between different colors:
                </p>
                          <label class="radio radio-blue">
                            <input type="radio" name="optionsRadios1" data-toggle="radio" id="optionsRadios1" value="option1" checked>
                            <i></i>Blue
                          </label>
                          <label class="radio radio-azure">
                            <input type="radio" name="optionsRadios2" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                            <i></i>Azure
                          </label>
                          <label class="radio radio-green">
                            <input type="radio" name="optionsRadios3" data-toggle="radio" id="optionsRadios3" value="option1" checked>
                            <i></i>Green
                          </label>
                          <label class="radio radio-orange">
                            <input type="radio" name="optionsRadios4" data-toggle="radio" id="optionsRadios4" value="option1" checked>
                            <i></i>Orange
                          </label>
                          <label class="radio radio-red">
                            <input type="radio" name="optionsRadios5" data-toggle="radio" id="optionsRadios5" value="option1" checked>
                            <i></i>Red
                          </label>
                          <div class="area-line">
                          <a data-target="#radioColor" href="javascript: void(0);" data-toggle="collapse">
                            See Full Implementation
                          </a>
    <div id="radioColor" class="collapse">
    <pre class="prettyprint">
    &lt;label class=&quot;radio radio-blue&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios1&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios1&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Blue
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio radio-azure&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios2&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios2&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Azure
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio radio-green&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios3&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios3&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Green
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio radio-orange&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios4&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios4&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Orange
    
    &lt;/label&gt;
    
    &lt;label class=&quot;radio radio-red&quot;&gt;
    
        &lt;input type=&quot;radio&quot; name=&quot;optionsRadios5&quot; data-toggle=&quot;radio&quot; id=&quot;optionsRadios5&quot; value=&quot;option1&quot; checked&gt;
    
        &lt;i&gt;&lt;/i&gt;Red
    
    &lt;/label&gt;
    </pre>
    </div>
                          </div>
                
                <p>
                    <h4>Methods</h4>
                    <ul class="list-unstyled">
    
                        <li>
                            <b>.radio('check') </b>
                            sets the checkbox state to checked.
                        </li>
                        <li>
                            <b>.radio('uncheck') </b>
                            sets the state to unchecked.
                        </li>
                    </ul>
                    <div class="area-line">
                    <a data-target="#radioMethod" href="javascript: void(0);" data-toggle="collapse">
                            See coded example
                    </a>
    <div id="radioMethod" class="collapse">
    <pre class="prettyprint">
    $(':radio').radio('check');
    </pre>
    </div>
                    </div>
                    <h4>Events</h4>
                    <ul class="list-unstyled">
                        <li>
                            <b>.on('toggle') </b>
                            gets activated when the checkbox state changes between checked and unchecked.                        
                        </li>
                        <li>
                            <b>.on('change') </b>
                            the behaviour as the toggle, with the difference that the event is fired for each radio button that gets a state change. 
                        </li>
                    </ul>
                </p>
                <div class="area-line">
                <a data-target="#radioEvent" href="javascript: void(0);" data-toggle="collapse">
                            See coded example
                </a>
    <div id="radioEvent" class="collapse">
    <pre class="prettyprint">
    $(':radio').on('toggle', function() {
      // Do something
    });
    </pre>
    </div>
                </div>      
    </div>
    <!-- end row -->

    <!-- dropdown row -->
    <div class="tim-row" id="dropdown-row">
            <h2> Dropdown </h2>
            <legend></legend>
            <p>
            We are very proud to present the dropdown, we added a subtle animation resembling a piece of paper sliding down. Here is an example and the code:
            </p>
    
            <div class="row">
                <div class="col-md-3 dropdown">
                  <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                      Dropdown 
                      <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
              </div>
    
            
            <div class="area-line">
            <a data-target="#dropdown" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="dropdown" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;dropdown&quot;&gt;
    
      &lt;button class=&quot;btn dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenu1&quot; data-toggle=&quot;dropdown&quot;&gt;
    
        Dropdown
    
        &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;
    
      &lt;/button&gt;
    
      &lt;ul class=&quot;dropdown-menu&quot; role=&quot;menu&quot; aria-labelledby=&quot;dropdownMenu1&quot;&gt;
    
        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    
        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    
        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    
        &lt;li role=&quot;presentation&quot; class=&quot;divider&quot;&gt;&lt;/li&gt;
    
        &lt;li role=&quot;presentation&quot;&gt;&lt;a role=&quot;menuitem&quot; tabindex=&quot;-1&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    
      &lt;/ul&gt;
    
    &lt;/div&gt;
    </pre>
    </div> 
            </div>                          
        
    </div>
    <!-- end row -->
    
    <!-- inputs row -->
        <div class="tim-row" id="inputs-row">
                <h2>Inputs </h2>
                <legend></legend>
            
                <p>
                We restyled the Bootstrap input to give it a different look. You can use the classic look, different colors and states or input groups.
                </p>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    	<input type="text" value="" placeholder="Input" class="form-control" />
                	</div>   
            	</div>
            	<div class="col-md-6">
            	    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control" />
                    </div> 
            	</div>
        	</div>
                <div class="row">
                <div class="col-md-6">
                      <div class="form-group has-error has-feedback">
                        <input type="text" value="Error" class="form-control" />
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                      </div>  
            	</div>
            	<div class="col-md-6">
                    	<div class="input-group">
                          <input type="text" value="Group Addon" class="form-control">
                          <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        </div> 
            	</div>
        	</div>
                <div class="area-line">
                <a data-target="#inputs" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
        <div id="inputs" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;form-group&quot;&gt;
    
        &lt;input type=&quot;text&quot; value=&quot;&quot; placeholder=&quot;Input&quot; class=&quot;form-control&quot; /&gt;
    
    &lt;/div&gt;  
    
    
    
    &lt;div class=&quot;form-group has-success&quot;&gt;
        
        &lt;input type=&quot;text&quot; value=&quot;Success&quot; class=&quot;form-control&quot; /&gt;
    
    &lt;/div&gt;             	
    
    
    
    &lt;div class=&quot;form-group has-error has-feedback&quot;&gt;
    
        &lt;input type=&quot;text&quot; value=&quot;Error&quot; class=&quot;form-control&quot; /&gt;
    
        &lt;span class=&quot;glyphicon glyphicon-remove form-control-feedback&quot;&gt;&lt;/span&gt;
    
    &lt;/div&gt;
    
    
    
    &lt;div class=&quot;input-group&quot;&gt;
    
        &lt;input type=&quot;text&quot; value=&quot;Group Addon&quot; class=&quot;form-control&quot;&gt;
    
        &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;fa fa-group&quot;&gt;&lt;/i&gt;&lt;/span&gt;
    
    &lt;/div&gt;
    </pre> 
    </div> 
                </div>     
        </div>
    <!-- end row --> 
    
    <!-- textarea row -->
    <div class="tim-row" id="textarea-row">
        <h2>Textarea</h2>
        <legend></legend>
        <p>We added custom style for the textarea, so it looks similar to all other inputs.</p>
        
        <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>
        
        <div class="area-line">
            <a data-target="#textarea" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="textarea" class="collapse">
    <pre class="prettyprint">
    &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Here can be your nice text&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->
    
    <!-- navbar row -->
    <div class="tim-row" id="navbar-row">
            <h2>Navbar </h2>
            <legend></legend>
            <p>
                We restyled the classic Bootstrap Navbar:
            </p>
    
            <div id="navbar">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Brand</a>
                    </div>
                
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li><a href="#">Work in progress...</a></li>
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div><!--  end navbar -->
            
            <div class="area-line">
            <a data-target="#navbarCode" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navbarCode" class="collapse">
    <pre class="prettyprint">
    &lt;div id=&quot;navbar&quot;&gt;
    
        &lt;nav class=&quot;navbar navbar-default&quot; role=&quot;navigation&quot;&gt;
    
          &lt;div class=&quot;container-fluid&quot;&gt;
    
            &lt;div class=&quot;navbar-header&quot;&gt;
    
              &lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#bs-example-navbar-collapse-1&quot;&gt;
    
                &lt;span class=&quot;sr-only&quot;&gt;Toggle navigation&lt;/span&gt;
    
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
    
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
    
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
    
              &lt;/button&gt;
    
              &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Brand&lt;/a&gt;
    
            &lt;/div&gt;
    
    
            &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;bs-example-navbar-collapse-1&quot;&gt;
    
              &lt;ul class=&quot;nav navbar-nav&quot;&gt;
    
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Work in progress...&lt;/a&gt;&lt;/li&gt;
    
                &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
    
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;&lt;/li&gt;
    
                &lt;li class=&quot;dropdown&quot;&gt;
    
                  &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;Dropdown &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;&lt;/a&gt;
    
                  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    
                    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;One more separated link&lt;/a&gt;&lt;/li&gt;
    
                  &lt;/ul&gt;
    
                &lt;/li&gt;
    
              &lt;/ul&gt;
    
            &lt;/div&gt;&lt;!-- /.navbar-collapse --&gt;
    
          &lt;/div&gt;&lt;!-- /.container-fluid --&gt;
    
        &lt;/nav&gt;
    
    &lt;/div&gt;&lt;!--  end navbar --&gt; 
    </pre>
    </div>
            </div>

            <p class="space-top">
                Besides the default navbar, we added 5 new classes for colors: primary, info, success, warning, danger. If you want to use one of them, you have to replace the 'navbar-default' with the class for the chosen color 'navbar-ct-#class'.
            </p>        
            
    <!-- navbar blue -->
    
    <div id="navbar-primary">
        <nav class="navbar navbar-ct-primary" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    </div><!--  end navbar -->
    
    <!-- navbar azure -->
    <div id="navbar-info">
            <nav class="navbar navbar-ct-info" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Work in progress...</a></li>
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        
        </div><!--  end navbar -->
    
    <!-- navbar green -->
    <div id="navbar-success">
        <nav class="navbar navbar-ct-success" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    </div><!--  end navbar -->
    
    <!-- navbar orange -->
    <div id="navbar-warning">
        <nav class="navbar navbar-ct-warning" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    </div><!--  end navbar -->
    
    <!-- navbar red -->
    <div id="navbar-danger">
        <nav class="navbar navbar-ct-danger" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Work in progress...</a></li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    </div><!--  end navbar -->
    
            <p class="space-top">
                Besides all this customisation, we have an extra navbar. 'Navbar-transparent' is a special class that you can to use if you want the navbar to be transparent. We recommend that the part of your page that has the transparent navbar contains something non-cluttered, like an image.    
            </p>
        
    </div>
    <!-- end row -->
    
    <!--     nav tabs row -->
    <div class="tim-row" id="navtabs-row">
        <h2> Nav Tabs</h2>
        <legend></legend>
        <p>We changed the look for the nav tabs, so they can easily integrate with the rest of the kit.</p>
        
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
            </ul>
            </div>
        </div>
        <div id="my-tab-content" class="tab-content text-center">
            <div class="tab-pane active" id="home">
                <p>Here is information about home.</p>
            </div>
            <div class="tab-pane" id="profile">
                <p>Here is your profile.</p>
            </div>
            <div class="tab-pane" id="messages">
                <p>Here are your messages.</p>
            </div>
        </div>
        <div class="area-line">
            <a data-target="#navTabs" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navTabs" class="collapse">
    <pre class="prettyprint">
&lt;div class=&quot;nav-tabs-navigation&quot;&gt;
    &lt;div class=&quot;nav-tabs-wrapper&quot;&gt;
    &lt;ul id=&quot;tabs&quot; class=&quot;nav nav-tabs&quot; data-tabs=&quot;tabs&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#home&quot; data-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#profile&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#messages&quot; data-toggle=&quot;tab&quot;&gt;Messages&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;my-tab-content&quot; class=&quot;tab-content text-center&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;home&quot;&gt;
        &lt;p&gt;Here is information about home.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;profile&quot;&gt;
        &lt;p&gt;Here is your profile.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;messages&quot;&gt;
        &lt;p&gt;Here are your messages.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

    </pre>
    </div>
        </div>
                    
    </div>
    <!--     end row -->

    <!-- nav pills row -->
    <div class="tim-row" id="navpills-row">
            <h2> Nav Pills</h2>
            <legend></legend>
            <p>
                We changed the design for the Bootstrap nav pills into something a bit more fresh. We also added more color classes for customisation. 
            </p>
            
            <ul class="nav nav-pills nav-pills-primary">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-info">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-success">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-warning">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <br />
            <ul class="nav nav-pills nav-pills-danger">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#"> Profile</a></li>
                  <li><a href="#">Messages</a></li>
            </ul>
            <div class="area-line">
            <a data-target="#navPills" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="navPills" class="collapse">
    <pre class="prettyprint">
    &lt;ul class=&quot;nav nav-pills nav-pills-blue&quot;&gt;
    
        &lt;!--  color-classes: &quot;nav-pills-primary&quot;, &quot;nav-pills-info&quot;, &quot;nav-pills-warning&quot;, &quot;nav-pills-danger&quot;, &quot;nav-pills-success&quot; --&gt;
    
          &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt; Profile&lt;/a&gt;&lt;/li&gt;
    
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messages&lt;/a&gt;&lt;/li&gt;
    
    &lt;/ul&gt;
    </pre>
    </div>
            </div>
        
    </div>
    <!-- end row -->
    
    <!-- pagination row -->
    <div class="tim-row" id="pagination-row">
            <h2> Pagination</h2>
            <legend></legend>
            <p>
            We took the Bootstrap pagination elements and customised them to fit the overall theme.
        </p>
        <ul class="pagination"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul> 
        <p class="">
            Besides the classic look, we also added the color classes to offer more customisation.
        </p>
            
        <ul class="pagination pagination-primary"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li class="active"><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul> 
        <ul class="pagination pagination-info"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li class="active"><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>     
        <ul class="pagination pagination-success"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li class="active"><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul> 
        <ul class="pagination pagination-warning"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li class="active"><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
        <ul class="pagination pagination-danger"> 
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li class="active"><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
            <div class="area-line">
            <a data-target="#pagination" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="pagination" class="collapse">
    <pre class="prettyprint">
    &lt;ul class=&quot;pagination&quot;&gt; 
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;&lt;/li&gt;
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    
      &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;&lt;/li&gt;
    
    &lt;/ul&gt
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->
    
    <!-- progressbar row -->
    <div class="tim-row" id="progressbar-row">
            <h2> Progress Bars</h2>
            <legend></legend>
        
            <p>The progress bars from Bootstrap hold the same classes and functionality. You can use the standard class or you can add the class 'progress-thin' for a progress bar that has only half the height of the normal one.</p>
             <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
             <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
             <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 35%">
                <span class="sr-only">35% Complete (success)</span>
              </div>
              <div class="progress-bar progress-bar-warning" style="width: 20%">
                <span class="sr-only">20% Complete (warning)</span>
              </div>
              <div class="progress-bar progress-bar-danger" style="width: 10%">
                <span class="sr-only">10% Complete (danger)</span>
              </div>
            </div>       
             <div class="area-line">
             <a data-target="#progressBars" href="javascript: void(0);" data-toggle="collapse">See full implementation</a>
    <div id="progressBars" class="collapse">
    <pre class="prettyprint">
    &lt;div class=&quot;progress&quot;&gt;
    
      &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 30%;&quot;&gt;
    
        &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;
    
      &lt;/div&gt;
    
    &lt;/div&gt;
    
    &lt;div class=&quot;progress&quot;&gt;
    
      &lt;div class=&quot;progress-bar progress-bar-info&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 60%;&quot;&gt;
    
        &lt;span class=&quot;sr-only&quot;&gt;60% Complete&lt;/span&gt;
    
      &lt;/div&gt;
    
    &lt;/div&gt;
    
    &lt;div class=&quot;progress&quot;&gt;
    
      &lt;div class=&quot;progress-bar progress-bar-success&quot; style=&quot;width: 35%&quot;&gt;
    
        &lt;span class=&quot;sr-only&quot;&gt;35% Complete (success)&lt;/span&gt;
    
      &lt;/div&gt;
    
      &lt;div class=&quot;progress-bar progress-bar-warning&quot; style=&quot;width: 20%&quot;&gt;
    
        &lt;span class=&quot;sr-only&quot;&gt;20% Complete (warning)&lt;/span&gt;
    
      &lt;/div&gt;
    
      &lt;div class=&quot;progress-bar progress-bar-danger&quot; style=&quot;width: 10%&quot;&gt;
    
        &lt;span class=&quot;sr-only&quot;&gt;10% Complete (danger)&lt;/span&gt;
    
      &lt;/div&gt;
    
    &lt;/div&gt;
    </pre>
    </div>
             </div>
    </div>
    <!-- end row -->
    
    <!-- sliders row -->
    <div class="tim-row" id="sliders-row">
            <h2> Sliders</h2>
            <legend></legend>
            <p>We restyled jQuery UI slider, while keeping the design consistent.</p>
            
            <div id="slider-default" class="slider-info"></div>
            <br>
            <div id="slider-range" class="slider-success"></div>
            <div class="area-line">
            <a data-target="#sliderMarkup" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
    <div id="sliderMarkup" class="collapse">
    <pre class="prettyprint">
    &lt;!-- Markup --&gt;
    &lt;div id=&quot;slider-default&quot; class=&quot;slider-info&quot;&gt;&lt;/div&gt;
    
    &lt;div id=&quot;slider-range&quot; class=&quot;slider-success&quot;&gt;&lt;/div&gt;
    
    &lt;!-- Javascript --&gt;
    $( &quot;#slider-range&quot; ).slider({
    
    	range: true,
    	min: 0,
    	max: 500,
    	values: [ 75, 300 ],
    
    });
    
    $( &quot;#slider-default&quot; ).slider({
    		
    		value: 70,
    		orientation: &quot;horizontal&quot;,
    		range: &quot;min&quot;,
    		animate: true
    
    });
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->
    
    <!-- labels row -->
    <div class="tim-row" id="labels-row">
        <h2>Labels</h2>
        <legend></legend>
        <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
        <div class="area-line">
            <a data-target="#labels" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="labels" class="collapse"> 
    <pre class="prettyprint">
    &lt;span class=&quot;label label-default&quot;&gt;Default&lt;/span&gt;
    
    &lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt;
    
    &lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt;
    
    &lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt;
    
    &lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt;
    
    &lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt;
    
    </pre> 
    </div>  
        </div>
    </div>
    <!-- end row -->
    
    <!-- datepicker row -->
    <div class="tim-row" id="datepicker-row">
        <h2>Datepicker</h2>
        <legend></legend>
        <p>The re-styled the Bootstrap datepicker and we added the Paper Kit colors, which you can give as parameter to the plugin: color = {blue,azure,green,orange,red}.</p>
        <div class="row">
            <div class="col-md-4">
                <input class="datepicker form-control" type="text"/>
            </div>
        </div>    
        <div class="area-line">
            <a data-target="#datepicker" href="javascript: void(0);" data-toggle="collapse"> See Markup and Javascript</a>
    <div id="datepicker" class="collapse">
    <pre class="prettyprint">
    &lt;!-- markup --&gt;
    
    &lt;input class=&quot;datepicker form-control&quot; type=&quot;text&quot;/&gt;
    
    
    
    &lt;!-- javascript --&gt;
    
    $(&apos;.datepicker&apos;).datepicker({
    
             weekStart:1,
    
             color: &apos;{color}&apos;
    
    });
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->
    
    <!-- modals row -->
    <div class="tim-row" id="modal-row">
        <h2>Modals</h2>
        <legend></legend>
        <p>We restyled the classic Twitter Bootstrap and gave it a more simple look. TO have the footer splitted into 2 parts, please you the 'left-side' and 'right-side' classes. You can see and an example below.
        </p>
        <!-- Button trigger modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. 
              </div>
              <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Never mind</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" class="btn btn-danger btn-simple">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
                      
        <div class="area-line">
             <a data-target="#modals" href="javascript: void(0);" data-toggle="collapse"> See Full Implementation</a>
    <div id="modals" class="collapse">
    <pre class="prettyprint">
&lt;div class=&quot;modal fade&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/button&gt;
        &lt;h4 class=&quot;modal-title&quot; id=&quot;myModalLabel&quot;&gt;Modal title&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. 
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;div class=&quot;left-side&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-simple&quot; data-dismiss=&quot;modal&quot;&gt;Never mind&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;divider&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;right-side&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-simple&quot;&gt;Delete&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
    </pre>
    </div>   
        </div>
    </div>
    <!-- end row -->
    
    <!-- tooltip row -->
    <div class="tim-row" id="tooltip-row">
            <h2> Tooltips</h2>
            <legend></legend>
            <p style="margin-bottom: 45px;">
            We restyled the Bootstrap tooltip.
            </p>
            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-trigger="manual">Button with Tooltip</button>
            <div class="area-line">
            <a data-target="#tooltipMarkup" href="javascript: void(0);" data-toggle="collapse">See Markup and Javascript</a> 
    <div id="tooltipMarkup" class="collapse">
    <pre class="prettyprint">
    &lt;!-- Markup --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-tooltip&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot; data-trigger=&quot;manual&quot;&gt;Button with Tooltip&lt;/button&gt;
    
    &lt;!-- Javascript --&gt;
    $(&apos;.btn-tooltip&apos;).tooltip();
    </pre>
    </div>
            </div>
    </div>
    <!-- end row -->
    
    <!-- popover row -->
    <div class="tim-row" id="popover-row">
        <h2>Popovers</h2>
        <legend></legend>
        <p>
            We restyled the Bootstrap popover and we added an extra effect of opening. When the popover is active, the background of the page gets darker, letting you concentrate on the information inside the popover. <br />
            See the following example:
        </p>
        <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top" title="Popover on top" data-content="Here will be some very useful information about his popover.">On top</button>
        <div class="area-line">
                <a data-target="#popover" href="javascript: void(0);" data-toggle="collapse">See Markup and Javascript</a> 
    
    <div id="popover" class="collapse">    
    <pre class="prettyprint">
    &lt;!-- markup --&gt;
    
    &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-toggle=&quot;popover&quot; data-placement=&quot;top&quot; title=&quot;Popover on top&quot; data-content=&quot;Here will be some very useful information about his popover.&quot;&gt;On top&lt;/button&gt;
    
    
    
    &lt;!-- javascript --&gt;
    
    gsdk.initPopovers();
    </pre>
    </div>
        </div>
    </div>
    <!-- end row -->    
    
    <!-- notification row -->
    <div class="tim-row" id="notification-row">
            <h2> Notifications </h2>
            <legend></legend>
            <p>
            The new Paper Kit notifications are looking fresh and clean. They go great with the navbar. If you want to see how we recommend using them, see on of the example pages <a href="examples/landing.html">here.</a> </p>
    </div>
    <!-- end row -->
    
    </div>
                <!-- end container -->
            </div>
        </div>
        </div>
    </div>

<?php snippet('footer') ?>