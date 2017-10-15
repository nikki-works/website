<!--
Developer: Nitin Jotwani
Website  : nitinjotwani.com
-->
<!DOCTYPE html>
<html>
<head>
	<title>Nitin Jotwani - Software Engineer</title>
	<meta name="description" content="Nitin Jotwani - Software Engineer - Stock Investor - Freelancer" />

	<link rel="stylesheet" type="text/css" href="files/css/nitin.css">

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cinzel+Decorative">
	
	<link rel="shortcut icon" href="files/img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div class="navbar-fixed">
	    <nav>
	        <div class="nav-wrapper">
	        	<a href="#!" class="show-on-med-and-down col s12 brand-logo">
	            	<!-- <img class="img-responsive customC-img-brand-logo" src="files/img/brand-logo.jpg"> -->
	            </a> 
	            <a href="#!" class="col s12 brand-logo" style="color: black;font-family: 'cinzel decorative'"">
	            	Nitin Jotwani
	            </a> 
	            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
	            <ul class="nitin_navCtrl right hide-on-med-and-down">
	            	<li><a href="index">Home</a></li>
                    <li><a href="index#nitin_about">About</a></li>
                    <li><a href="index#nitin_resume">Resume</a></li>
                    <li><a href="index#nitin_skills">Skills</a></li>
                    <li><a href="index#nitin_portfolio">Portfolio</a></li>
                    <li><a href="index#nitin_contact">Contact</a></li>
                    <li class="active"><a href="sharemarket" target="_blank">ShareMarket</a></li>
                    <li><a href="products" target="_blank">Products</a></li>
                    <li><a href="blog" target="_blank">Blog</a></li><br><br>
                </ul>
				<ul class="side-nav collapsible" data-collapsible="accordion" id="mobile-demo">
                    <li><a href="index">Home</a></li>
                    <li><a href="index#nitin_about">About</a></li>
                    <li><a href="index#nitin_resume">Resume</a></li>
                    <li><a href="index#nitin_skills">Skills</a></li>
                    <li><a href="index#nitin_portfolio">Portfolio</a></li>
                    <li><a href="index#nitin_contact">Contact</a></li>
                    <li class="active"><a href="sharemarket" target="_blank">ShareMarket</a></li>
                    <li><a href="products" target="_blank">Products</a></li>
                    <li><a href="blog" target="_blank">Blog</a></li>
                </ul>
	        </div>
	    </nav>
	    </div>
	    <br>
	    <div class="container">
	    	<div class="row">
	    		<div class="col s12 l10 push-l1">
		    			
		    		<table class="responsive-table bordered striped customC_stockQuotes">
				        <thead>
				          <tr>
				              <th class="customC_col1">DATE</th>
				              <th class="customC_col2">STOCK QUOTE</th>
				              <th class="customC_col3">PRICE </th>
				              <th class="customC_col4">CURRENT PRICE</th>
				              <th class="customC_col5">PROFIT/LOSS</th>
				              <th class="customC_col6">DURATION</th>
				              <th class="customC_col7">SUGGESTION</th>
				          </tr>
				        </thead>

				        <tbody>
						    <?php
						    	include "test.php";
						    	include "dbConnect.php";
								
								

								$query="select * from stockquotes ORDER BY id DESC";
								$query_run=mysql_query($query);

								while($row = mysql_fetch_array($query_run)) 
								{
									$date=$row['date'];
									$stockquote=$row['stockquote'];
									$price=$row['price'];
									$duration=$row['duration'];
									$suggestion=$row['suggestion'];
									

									$cmp=str_replace( ',', '', getQuotePrice($stockquote));

									$pl=floatval($cmp)-floatval($price);

									echo "<tr>
											<td>$date</td>
											<td>$stockquote</td>
											<td>$price</td>
											<td>$cmp</td>";
											if($pl<0)
												echo "<td style='background-color:rgb(244,199,195)'>$pl</td>";
											else
												echo "<td style='background-color:rgb(183,225,205)'>$pl</td>";
											echo "<td>$duration</td>
											<td>$suggestion</td>
										</tr>";
								}
						    ?>
						</tbody>
				    </table>
				    <span>Disclaimer: Invest at your own risk.<br>
				    	The author is neither a registered stockbroker nor a registered advisor. While he believes his statements to be true, based on his study and they always depend on the reliability of his own credible sources. </span><br><br>
			    </div>
    		</div>
    		<div class="row customC_section">
	    		<div class="col s12 l10 push-l1 customC_sm_info">
		    		<h5 style="text-align: center;">
		    			I'm not a master at stock market nor i like to take risk. But i believe-<br>
		    			<span>"A comfort zone is a beautiful place, but nothing ever grows there"</span><br><br>
		    			The decision taken to choose the particular stock, are based on my interest towards reading about stock market and studying,  understanding stock market since 2015.<br><br>
		    			If you are interested in receiving stock market suggestion's,<br> feel free to subscribe for <span style="color: greenyellow">1Month Free Basic Plan Trial Period<br><br></span>
		    			<a class="ta_button modal-trigger col s12 l4 push-l4" title="Offer Expired" href="#expiredModal" style="cursor:not-allowed;">subscribe</a><br><br><br>
		    		</h5>
		    		<div style="font-size: 22px">
		    			<div class="row">
			    			<div class="col s12 l12 customC_sm_info">
			    			<span style="color: greenyellow;font-size: 24px">Basic Plan</span><br>
			    			- 4 Stock Quotes in a Month<br>
			    			- Daily E-mail, containing update regarding stock quotes after Market closes
			    			</div>
			    			<!-- <div class="col s12 l2 customC_sm_info">
			    				<a class="ta_button_purchase modal-trigger col s12 " href="#contactModal" style="">
			    					<i class="fa fa-inr" aria-hidden="true"></i>/Month
								</a>
			    			</div> -->
		    			</div>
		    			<div class="row" style="margin-top: 20px">
			    			<div class="col s12 l12 customC_sm_info">
			    			<span style="color: greenyellow;font-size: 24px">Platinum Plan</span><br>
			    			- 6 Stock Quotes in a Month<br>
			    			- Random stock suggestion's and news alert as per the market sentiments <br>
			    			- Portfolio Advisory Service <br>
			    			- Daily E-mail, containing update regarding stock quotes after Market closes<br>
			    			- Alert regarding Best Time to Buy and Sell a stock<br><br>
			    			</div>
			    			<!-- <div class="col s12 l2 customC_sm_info">
			    				<a class="ta_button_purchase modal-trigger col s12 " href="#contactModal" style="">
			    					<i class="fa fa-inr" aria-hidden="true"></i>/Month
								</a>
			    			</div> -->
		    			</div>
		    			<div class="row">
		    				<div class="col s12 l12 customC_sm_info">
		    					<a class="ta_button modal-trigger hide-on-med-and-down col s12 l4 push-l4" href="#purchasePlanModal_contact" style="">Contact to Purchase Plan</a>
		    					<a class="ta_button modal-trigger hide-on-large-only col s12 l4 push-l4" href="#purchasePlanModal_contact" style="">Purchase Plan</a><br><br><br>
		    					for more, follow me  
		    						<a href="https://twitter.com/jotwaninitin" target="_blank">
		    							@jotwaninitin
		    						</a> to be updated...
		    				</div>
		    			</div>
		    		</div>
	    		</div>
	    	</div>
    	</div>
	    
	    <div class="container">

	    	<div id="contactModal" class="row modal">
                <h4 class="customC_form_heading">1Month Free Trial</h4>
                <div class="modal-content" style="text-align:left;margin-top: -40px">
                    <div class="input-field col m12 s12">
                        <input id="name" type="text" class="validate">
                        <label for="name">Name*</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <input id="email" type="text" class="validate">
                        <label for="email">Email Id*</label>
                    </div>
                    <span class="col m12 s12" style="font-size: 15px">
                        <div class="row">
                            *Required
                        </div>
                        <div class="row" id="mailError" style="color: red">
                        </div>
                    </span>
                </div>
                <div class="modal-footer" style="padding:35px">
                    <span  class="modal-action modal-close waves-effect waves-light col s12 m4 btn " style="float:left">Close</span>
                    <span class=" modal-action waves-effect waves-light col s12 m4 btn"  onclick="sendMail('1MonthFreeTrial')">Submit</span>
                    <br>
                </div>
            </div>
            <div id="expiredModal" class="row modal">
                <div class="modal-content" style="text-align:center;">
                    <h4 class="customC_form_heading" style="color: black">
                    	Offer Expired! Coming Soon...
					</h4>
                </div>
                <div class="modal-footer col s12 l12">
                    <span class="modal-action modal-close waves-effect waves-light col s12 m12 l12 btn ">Close</span>
                </div>
            </div>
            <div id="thankyouModal" class="row modal">
                <div class="modal-content" style="text-align:center;">
                    <h4 class="customC_form_heading" style="color: black">
                    	Thanks For Subscribing <i class="fa fa-smile-o" aria-hidden="true"></i>
					</h4>
                </div>
                <div class="modal-footer col s12 l12">
                    <span class="modal-action modal-close waves-effect waves-light col s12 m12 l12 btn ">Close</span>
                </div>
            </div>

            <div id="purchasePlanModal_contact" class="row modal">
                <h4 class="customC_form_heading">Purchase Plan</h4>
                <div class="modal-content" style="text-align:left;margin-top: -40px">
                    <div class="input-field col m12 s12">
                        <input id="namePP" type="text" class="validate">
                        <label for="namePP">Name*</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <input id="emailPP" type="text" class="validate">
                        <label for="emailPP">Email Id*</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <input id="queryPP" type="text" class="validate">
                        <label for="queryPP">Query</label>
                    </div>
                    <span class="col m12 s12" style="font-size: 15px">
                        <div class="row">
                            *Required
                        </div>
<div class="row" id="mailErrorPP" style="color: red">
                                </div>
					</span>
                </div>
                <div class="modal-footer" style="padding:35px">
                    <span  class="modal-action modal-close waves-effect waves-light col s12 m4 btn " style="float:left">Close</span>
                    <span class=" modal-action waves-effect waves-light col s12 m4 btn"  onclick="sendMailPP('PurchasePlan')">Submit</span>
                    <br>
                </div>
            </div>
            <div id="purchasePlanModal_thankyou" class="row modal">
                <div class="modal-content" style="text-align:center;">
                    <h4 class="customC_form_heading" style="color: black">
                    	Thankyou For Contacting <i class="fa fa-smile-o" aria-hidden="true"></i>
					</h4>
                </div>
                <div class="modal-footer col s12 l12">
                    <span class="modal-action modal-close waves-effect waves-light col s12 m12 l12 btn ">Close</span>
                </div>
            </div>

	    </div>
	    <?php
			include "inc_scripts.php";
		?>
	
    
</body>
