<div class="jumbotron jumbotron-fluid panel1">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <h1>Download your Uber and Lyft receipts automatically</h1>
        <p>
          <a href="#" id="download" class="hidden"></a>
          <a href="#" class="btn btn-get" data-toggle="modal" data-target="#downloadModal" onClick="ga('send', 'event', 'Download');">Get Ride Receipts</a>
          <a href="https://github.com/ridereceipts/ridereceipts" target="_blank" rel="noreferrer" class="btn btn btn-outline-git">Github</a>
        </p>
      </div>
      <div class="col-sm-12 col-lg-6">
        <img src="@asset('images/ride-receipts-demo-1.gif')" class="img-fluid" alt="Ride Receipts Demo">
      </div>
    </div>
  </div>
  <p class="compatible ml-5">* Mac & PC compatible</p>
  <div class="logos">
    <a href="https://www.producthunt.com/posts/uber-run-the-best-app-for-downloading-your-invoices" target="_blank" class="logo-item">
      <svg width="140" height="33" viewBox="0 0 140 33" xmlns="http://www.w3.org/2000/svg"><title>product-hunt</title><g fill="#231F20" fill-rule="evenodd" opacity=".25"><path d="M18.6 11.5H14v4.9h4.6c1.4 0 2.5-1.1 2.5-2.5s-1.2-2.4-2.5-2.4"/><path d="M18.6 19.7H14v4.9h-3.3V8.2h7.9c3.2 0 5.7 2.6 5.7 5.7s-2.6 5.8-5.7 5.8M16.4 0C7.3 0 0 7.3 0 16.4c0 9 7.3 16.4 16.4 16.4 9.1 0 16.4-7.3 16.4-16.4C32.8 7.3 25.4 0 16.4 0M50 14.4c0-.9-.7-1.4-1.6-1.4H46v2.9h2.4c.9-.1 1.6-.6 1.6-1.5zm-6.3 7.5v-11h5c2.3 0 3.6 1.6 3.6 3.5s-1.3 3.4-3.6 3.4H46v4h-2.3v.1zm10-.1v-8h2v1c.6-.7 1.5-1.2 2.5-1.2v2h-.6c-.7 0-1.6.4-1.9.9v5.3h-2zm11.4-4c0-1.2-.7-2.3-2-2.3s-2 1-2 2.3c0 1.2.7 2.3 2 2.3 1.3-.1 2-1.1 2-2.3m-6.1 0c0-2.2 1.5-4.1 4.1-4.1 2.6 0 4.1 1.9 4.1 4.1 0 2.2-1.5 4.1-4.1 4.1-2.5-.1-4.1-1.9-4.1-4.1m15.1 1.3v-2.8c-.3-.5-1.1-.9-1.8-.9-1.2 0-2 .9-2 2.3s.8 2.3 2 2.3c.7 0 1.5-.3 1.8-.9zm0 2.7v-1.2c-.6.8-1.4 1.2-2.4 1.2-1.9 0-3.4-1.5-3.4-4.1 0-2.5 1.5-4.1 3.4-4.1.9 0 1.8.4 2.4 1.2v-4h2.1v10.9h-2.1v.1zm9.3 0v-1.2c-.5.6-1.5 1.2-2.7 1.2-1.7 0-2.5-.9-2.5-2.4v-5.5h2v4.7c0 1.1.6 1.4 1.4 1.4.8 0 1.4-.4 1.8-.9v-5.3h2v8h-2zm3.6-4c0-2.4 1.7-4.1 4.1-4.1 1.6 0 2.6.7 3.1 1.4l-1.3 1.3c-.4-.5-.9-.8-1.6-.8-1.2 0-2.1.9-2.1 2.3s.9 2.3 2.1 2.3c.7 0 1.3-.3 1.6-.9l1.3 1.3c-.5.7-1.5 1.4-3.1 1.4-2.3-.2-4.1-1.8-4.1-4.2m9 1.9v-4h-1.3v-1.8H96v-2.1h2v2.1h1.6v1.8H98v3.5c0 .5.3.9.7.9.3 0 .6-.1.7-.2l.4 1.6c-.3.3-.9.5-1.7.5-1.4-.2-2.1-.9-2.1-2.3"/><path d="M112.7002 21.7998L112.7002 17.0998 107.5992 17.0998 107.5992 21.7998 105.3002 21.7998 105.3002 10.8998 107.5992 10.8998 107.5992 15.0998 112.7002 15.0998 112.7002 10.8998 115.0002 10.8998 115.0002 21.7998z"/><path d="M122.3 21.8v-1.2c-.5.6-1.5 1.2-2.7 1.2-1.7 0-2.5-.9-2.5-2.4v-5.5h2v4.7c0 1.1.6 1.4 1.4 1.4.8 0 1.4-.4 1.8-.9v-5.3h2v8h-2zm9.3 0V17c0-1.1-.6-1.4-1.4-1.4-.8 0-1.4.5-1.8.9v5.4h-2v-8h2v1c.5-.6 1.5-1.2 2.7-1.2 1.7 0 2.5 1 2.5 2.5v5.7h-2v-.1zm4.5-2.1v-4h-1.3v-1.8h1.3v-2.1h2v2.1h1.6v1.8h-1.6v3.5c0 .5.3.9.7.9.3 0 .6-.1.7-.2l.4 1.6c-.3.3-.9.5-1.7.5-1.3-.2-2.1-.9-2.1-2.3"/></g></svg>
    </a>
    <a href="http://www.softpedia.com/get/Internet/Download-Managers/Uber-Run.shtml"  target="_blank" class="logo-item">
      <svg width="119" height="18" viewBox="0 0 119 18" xmlns="http://www.w3.org/2000/svg"><title>softpedia</title><g fill-rule="evenodd" opacity=".25"><path d="M85.36 14.031a9.227 9.227 0 0 0 3.07-.24 2.86 2.86 0 0 0 2.17-2.17 6.028 6.028 0 0 0 0-3.16 2.832 2.832 0 0 0-2.28-2.201 22.688 22.688 0 0 0-2.41-.27 3.265 3.265 0 0 0-.6.061l.05 7.98zm-3.89 3.83V2.211c.118-.036.239-.059.36-.07h5.49a8.588 8.588 0 0 1 3.38.82 6.329 6.329 0 0 1 3.7 4.5c.447 1.81.413 3.707-.1 5.5a6.339 6.339 0 0 1-4.35 4.429 9.103 9.103 0 0 1-2.92.5h-5.11c-.12.011-.24-.009-.45-.029zm-63.65-7.85a4 4 0 0 0 3.94 4.06h.06a4.036 4.036 0 0 0 0-8.07 4 4 0 0 0-4.04 3.96v.05h.04zm4 7.89a7.902 7.902 0 0 1-.1-15.8 7.902 7.902 0 0 1 7.95 7.85v.03a7.781 7.781 0 0 1-7.639 7.92h-.21zm87.78-7.98c-.21-.7-.36-1.31-.57-1.9a7.994 7.994 0 0 0-.68-1.87l-1.13 3.77h2.38zm-4.85 7.94h-3.95c.013-.181.04-.362.08-.54A8266.35 8266.35 0 0 1 104.65 5a3.86 3.86 0 0 1 7.45-.1c.73 2.25 1.4 4.51 2.09 6.77.594 1.94 1.183 3.884 1.77 5.83 0 .1 0 .19.09.35h-4l-1.26-4.07h-4.76l-1.28 4.08zM5.37 6.14c.292.176.596.33.91.46.79.27 1.61.47 2.4.75.772.25 1.523.558 2.25.92a3.998 3.998 0 0 1 2.23 3.57 4.42 4.42 0 0 1-1.64 3.62 8.231 8.231 0 0 1-3.26 1.61A30.298 30.298 0 0 1 0 17.9v-3.82h.85c1.983 0 3.96-.208 5.9-.62.66-.178 1.303-.416 1.92-.71.45-.2.44-.271.63-.8-.14-.38-.51-.48-.83-.601-.69-.25-1.41-.42-2.11-.66a21.262 21.262 0 0 1-2.55-1 4.17 4.17 0 0 1-2.34-3.11 3.871 3.871 0 0 1 3.31-4.43c.28-.013.56-.013.84 0h6.52v3.81H5.42l-.05.18zm67.94 7.93h6.64v3.8h-.69c-2 0-3.92-.05-5.88 0a3.83 3.83 0 0 1-4-3.9V2.52c.009-.135.026-.268.05-.4h10.56v3.74c-.74.096-1.486.123-2.23.08H73.32v2.12h4.41c.18 1.276.203 2.57.07 3.85h-4.49v2.16zM60.6 9.921a7.01 7.01 0 0 0 2.92-.4 1.62 1.62 0 0 0 1-1.6 1.579 1.579 0 0 0-.92-1.55 5.247 5.247 0 0 0-3-.35v3.9zm0 3.83v4.1h-3.9V2.19a2.03 2.03 0 0 1 .32-.05h5.64a6.19 6.19 0 0 1 3.83 1.5 5.7 5.7 0 0 1-1.42 9.41 6.912 6.912 0 0 1-3 .66l-1.47.04zm-25.84 4.11h-3.84V6.231a3.996 3.996 0 0 1 1.37-3.19 3.239 3.239 0 0 1 2.13-.9h7.17a.99.99 0 0 1 .25.07v3.73H34.8v2.08h5.28v3.79c-1.71.09-3.46 0-5.23.06a8.166 8.166 0 0 0-.08 2v1.91l-.01 2.08zm8.13-11.9V2.28c.54-.19 10.4-.27 12.25-.1.191 1.25.218 2.522.08 3.78-.68.07-1.39 0-2.09 0h-2.12c-.07 2 0 4 0 5.92v5.86a14.398 14.398 0 0 1-3.79 0V6.02c-1.49-.09-2.88.02-4.33-.06m57.02 11.9h-3.79V2.171h3.74c.14.55.19 14.47.05 15.69m17.21-14.64a1.59 1.59 0 0 0 .07-2.23 1.639 1.639 0 0 0-2.22 0 1.659 1.659 0 0 0 0 2.28 1.48 1.48 0 0 0 2.16-.07l-.01.02zm-1-3.22a2.052 2.052 0 0 1 2.1 2.13c0 1.176-.954 2.13-2.13 2.13a2.18 2.18 0 0 1-2.13-2.16 2.13 2.13 0 0 1 2.16-2.1z"/><path d="M116.42 1.75v-.18h-.49l.11.47.38-.29zm.75 1.44h-.71l-.46-.86-.16.84h-.47V1.01a6.42 6.42 0 0 1 1 0c.59.09.79.49.57 1.06-.06.118-.13.228-.21.33l.44.81v-.02z"/></g></svg>
    </a>
    <a href="https://korben.info/uber-run-un-outil-pour-recuperer-facilement-vos-factures-uber.html" target="_blank" class="logo-item">
      <svg width="91" height="22" viewBox="0 0 91 22" xmlns="http://www.w3.org/2000/svg"><title>korben</title><g opacity=".25"><path d="M0 0.81147541L4.00687747 0.81147541 4.00687747 10.0514754 9.53521739 0.81147541 14.2614625 0.81147541 8.77988142 9.95409836 14.3082213 21.4193443 9.81936759 21.4193443 6.22252964 14.1701639 4.00328063 17.9137705 4.00328063 21.4193443 0 21.4193443z"/><path d="M15.912 6.874c0-4.216 1.986-6.852 6.834-6.852 4.849 0 6.834 2.654 6.834 6.852v8.245c0 4.216-1.938 6.852-6.805 6.852-4.726 0-7.193-2.604-6.899-6.852l.036-8.245zm6.834 11.087c1.889 0 2.835-.758 2.835-2.842V6.874c0-1.803-.756-2.795-2.835-2.795-2.079 0-2.834.995-2.834 2.795v8.245c.018 1.832.773 2.842 2.852 2.842h-.018zM32.778 4.555V.811h6.568c4.913.332 5.812 3.885 5.812 7.059 0 2.654-.47 4.547-2.597 5.828l4.112 7.768h-4.209l-3.597-6.964h-2.071v6.917h-4.018V10.711h4.111l-3.165-6.16-.946.004zm5.054 0l2.834 5.496c.471-.522.755-1.28.755-2.369 0-2.557-1.226-3.127-3.165-3.127h-.424zm22.595.332c.093.995 0 2.885-1.37 3.837 1.557.047 2.517 1.847 2.74 2.226.946 1.467 1.655 5.02.094 7.627-1.561 2.608-5.061 2.842-5.061 2.842h-7.517V.811s6.834-.378 7.891.332c1.558.71 2.978 1.382 3.223 3.744zm-7.086-.721v4.13h.662c2.74 0 2.457-1.66 2.457-2.132 0-1.613-1.04-1.991-1.936-1.991l-1.183-.007zm2.41 13.596s2.079.047 2.694-1.233c.615-1.28.424-2.525-.047-3.22a2.965 2.965 0 0 0-2.316-1.137h-2.74v5.59h2.409z"/><path d="M65.1027668 21.4193443L65.1027668 0.81147541 75.2602372 0.81147541 75.2602372 4.84 69.1096443 4.84 69.1096443 7.39704918 75.10917 7.39704918 75.10917 11.4219672 69.1096443 11.4219672 69.1096443 17.3908197 75.2530435 17.3908197 75.2530435 21.4193443z"/><path d="M86.9679447 17.9137705L81.9611462 8.43934426 81.9611462 21.4229508 77.9434783 21.4229508 77.9434783 0.81147541 81.9611462 0.81147541 86.9679447 10.3327869 86.9679447 0.81147541 91 0.81147541 91 21.4193443 86.9679447 21.4193443z"/></g></svg>
    </a>
    <a href="https://www.addictivetips.com/mac-os/download-your-uber-invoice-for-month-year-macos/"  target="_blank" class="logo-item">
      <svg width="167" height="15" viewBox="0 0 167 15" xmlns="http://www.w3.org/2000/svg"><title>addictive-tips</title><g transform="translate(0 .227)" fill="#231F20" fill-rule="evenodd" opacity=".25"><path d="M94.094 11.614h5.582v.932h-6.63V2.159h6.448v.932h-5.4v3.568h5.035v.932h-5.035v4.023zm-9.979-.432h.023l3.372-9.023h1.139l-3.987 10.387h-1.116L79.58 2.159h1.14l3.394 9.023zm-9.956 1.364h1.048V2.159h-1.048v10.387zm-7.997 0h-1.048V3.114h-3.486v-.955h8.02v.932h-3.486v9.455zm-7.997-1.682a3.98 3.98 0 0 1-.638.75c-.25.227-.547.431-.865.613a4.768 4.768 0 0 1-1.094.432c-.387.114-.82.16-1.299.16a5.847 5.847 0 0 1-2.187-.41 5.571 5.571 0 0 1-1.731-1.136 4.913 4.913 0 0 1-1.117-1.728c-.273-.659-.41-1.386-.41-2.181 0-.796.137-1.523.41-2.182.274-.66.661-1.25 1.14-1.727a5.087 5.087 0 0 1 1.73-1.137 5.725 5.725 0 0 1 2.165-.409c.388 0 .752.045 1.117.114.364.068.706.182 1.025.34.319.137.615.319.888.523.274.205.479.432.661.682l-.888.636c-.114-.159-.251-.34-.433-.5A2.616 2.616 0 0 0 56 3.273a4.166 4.166 0 0 0-.798-.319 4.056 4.056 0 0 0-.934-.113c-.683 0-1.276.113-1.822.363-.524.25-.98.569-1.367.978a4.11 4.11 0 0 0-.843 1.432 4.83 4.83 0 0 0-.296 1.727c0 .613.09 1.182.296 1.727.205.546.478 1.023.865 1.432.365.409.82.75 1.367.977.524.25 1.14.364 1.8.364.593 0 1.162-.114 1.709-.364.547-.25.98-.636 1.344-1.182l.843.569zm-15.538 1.682h1.048V2.159h-1.048v10.387zm-13.009-.932h2.096c.775 0 1.458-.114 2.05-.364a4.503 4.503 0 0 0 1.459-.955c.387-.386.66-.84.865-1.363.183-.5.297-1.023.297-1.568 0-.546-.092-1.068-.297-1.569a3.961 3.961 0 0 0-.865-1.363 4.166 4.166 0 0 0-1.458-.955 5.69 5.69 0 0 0-2.05-.363h-2.097v8.5zm-1.07-9.455h3.462a6.66 6.66 0 0 1 1.96.318c.66.227 1.23.546 1.754.978.524.431.957.977 1.276 1.636.319.659.478 1.409.478 2.273 0 .863-.16 1.636-.478 2.272a4.955 4.955 0 0 1-1.276 1.614 5.78 5.78 0 0 1-1.754.977 6.535 6.535 0 0 1-1.96.319h-3.463V2.159zm-13.01 9.455h2.096c.775 0 1.458-.114 2.05-.364a4.503 4.503 0 0 0 1.459-.955c.387-.386.66-.84.865-1.363.183-.5.297-1.023.297-1.568 0-.546-.091-1.068-.297-1.569a3.961 3.961 0 0 0-.865-1.363 4.166 4.166 0 0 0-1.458-.955c-.593-.25-1.276-.363-2.05-.363h-2.097v8.5zm-1.07-9.455h3.462a6.66 6.66 0 0 1 1.96.318c.66.227 1.23.546 1.754.978.524.431.957.977 1.276 1.636.319.659.478 1.409.478 2.273 0 .863-.16 1.636-.478 2.272a4.955 4.955 0 0 1-1.276 1.614 5.78 5.78 0 0 1-1.754.977 6.535 6.535 0 0 1-1.96.319h-3.463V2.159zM2.687 8.864h4.603L4.989 3.34l-2.3 5.523zm-1.526 3.682H0L4.511 2.159h1.025l4.466 10.387H8.817l-1.14-2.728H2.302l-1.14 2.728zm140.161-7.682a2.42 2.42 0 0 0-.843-.66c-.341-.159-.683-.25-1.002-.25-.16 0-.342.023-.501.046-.183.023-.32.09-.456.16-.136.09-.25.18-.342.317a.863.863 0 0 0-.136.5c0 .182.045.318.114.432.068.114.182.227.319.318.136.091.318.16.5.25.206.068.41.16.662.228.341.113.729.25 1.093.386.388.136.73.34 1.048.568.319.227.57.523.775.864.205.34.319.772.319 1.295 0 .591-.114 1.114-.342 1.546a3.149 3.149 0 0 1-.889 1.068 3.95 3.95 0 0 1-1.275.636c-.479.137-.98.205-1.481.205a6.388 6.388 0 0 1-2.165-.387 4.381 4.381 0 0 1-1.731-1.113l1.64-1.682c.25.318.592.568 1.003.795.41.205.843.319 1.253.319.182 0 .364-.023.546-.069.183-.045.342-.113.456-.181.137-.091.228-.205.32-.341.067-.137.113-.319.113-.523a.863.863 0 0 0-.137-.5 1.073 1.073 0 0 0-.41-.364c-.182-.113-.41-.204-.683-.318-.274-.09-.57-.182-.912-.295a7.321 7.321 0 0 1-.98-.387 3.658 3.658 0 0 1-.842-.568c-.25-.227-.456-.5-.592-.84-.16-.319-.228-.728-.228-1.205 0-.569.114-1.069.341-1.478.228-.409.547-.75.934-1.022a3.71 3.71 0 0 1 1.299-.569 6.25 6.25 0 0 1 1.458-.181c.592 0 1.185.113 1.8.318.615.227 1.14.523 1.618.954l-1.664 1.728zm-12.462.522c0-.25-.045-.454-.137-.59a.993.993 0 0 0-.387-.364c-.16-.091-.364-.137-.57-.182a6.025 6.025 0 0 0-.66-.045h-1.117v2.454h1.048c.228 0 .456-.023.684-.068.228-.046.41-.114.592-.205.183-.09.296-.227.41-.386.092-.182.137-.386.137-.614zm2.506-.022c0 .613-.114 1.113-.342 1.522-.227.41-.524.75-.91 1-.388.25-.821.432-1.322.569a7.043 7.043 0 0 1-1.55.181h-1.253v3.91h-2.506V2.158h3.828c.57 0 1.093.046 1.595.16.5.113.934.295 1.298.545.365.25.661.568.866.977.205.432.296.932.296 1.523zm-15.515 7.181h2.529V2.16h-2.53v10.386zm-7.04-8.227v8.25h-2.506v-8.25h-2.94V2.16h8.408v2.16h-2.962zm53.95 3.977h-2.323v2.319h-1.869V8.295h-2.324V6.432h2.324V4.114h1.869v2.318h2.323v1.863zM159.504 0c-4.078 0-7.381 3.295-7.381 7.364 0 4.068 3.303 7.363 7.381 7.363h7.382V7.364c0-4.069-3.303-7.364-7.382-7.364z"/></g></svg>
    </a>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel2 step" data-aos="swing" data-aos-offset="500">
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <img src="@asset('images/april-calendar.svg')" class="img-fluid" alt="Calendar">
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-sm-10 col-lg-7">
        <h1>Put an end to the tax-season grind</h1>
        <p>
          Every year during tax season we found ourselves scrambling to download our receipts from ride sharing apps, such as Uber and Lyft. Currently, you have to click on each ride and manually download, rename and organize these receipts one by one. For those of us who use ride sharing apps for business travel, this can add up to A LOT of trips. We created Ride Receipts to make this task more efficient by automating the process.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel3">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-10 col-lg-7">
        <h1>It’s a FREE open-source desktop app, and we’re sharing it with anyone who could benefit from this time-saving tool.</h1>
        <br/>
        <p class="ideal-for">Ride Receipts is ideal for:</p>
        <div class="row">
          <div class="col-sm ideal-item" data-aos="fade" data-aos-delay="300">
            <img src="@asset('images/business-owners.svg')" class="mx-auto d-block img-fluid" alt="Business Owners">
            <p class="text-center">Business owners<br/>on the go</p>
          </div>
          <div class="col-sm ideal-item" data-aos="fade" data-aos-delay="1000">
            <img src="@asset('images/self-employed.svg')" class="mx-auto d-block img-fluid" alt="Self Employed">
            <p class="text-center">Self-employed or freelancers</p>
          </div>
          <div class="col-sm ideal-item" data-aos="fade" data-aos-delay="1500">
            <img src="@asset('images/reimbursement.svg')" class="mx-auto d-block img-fluid" alt="Reimbursement">
            <p class="text-center">Employees who get reimbursed for travel</p>
          </div>
        </div>
      </div>
    </div>
    <div class="divider"></div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel4">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-6 mx-auto">
        <h1>Automation to the rescue!</h1>
        <p>Ride Receipts will automatically download your Uber and Lyft receipts and invoices in neat and tidy folders.</p>
        <br/>
        <p class="features">Features</p>
        <ul class="features-list">
          <li><img src="@asset('images/check-mark.svg')" class="checkmark"> Categorization by user account</li>
          <li><img src="@asset('images/check-mark.svg')" class="checkmark"> Folders organized by year and month</li>
          <li><img src="@asset('images/check-mark.svg')" class="checkmark"> Custom file naming: e.g. Jan-30-2018-9am.pdf</li>
          <li><img src="@asset('images/check-mark.svg')" class="checkmark"> Filter trips by year, previous month or quarter</li>
        </ul>
      </div>
      <div class="col-sm-10 col-lg-6 mx-auto">
        <img src="@asset('images/ride-receipts-file-organization.gif')" class="img-fluid file-org" alt="Ride Receipts Video">
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel5 d-none d-sm-block">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-10 col-lg-7">
        <h1 class="text-center">Get Started</h1>
        <br/>
        <p>Ride Receipts requires Chromium to operate. Please download Chromium to your <span class="underline">desktop</span> and unzip the file before using Ride Receipts.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="stepper-head">
          <a href="https://download-chromium.appspot.com/" target="_blank" rel="noreferrer" class="stepper-step step--chromium">
            Get Chromium
          </a>
          <hr class="divider">
          <a href="#" id="downloadstepmob" class="stepper-step step--uberrun" onClick="ga('send', 'event', 'Download');">
            Get Ride Receipts
          </a>
          <hr class="divider">
          <a href="https://github.com/mrgodhani/uberrun" target="_blank" rel="noreferrer" class="stepper-step step--readme">
            Follow Readme File
          </a>
        </div>
      </div>
      <div class="col-sm-8 mx-auto mt-5 px-5">
        <p><strong>Uber users</strong>: The app will download your receipts/invoices directly from your Uber account.</p>
        <p><strong>Lyft users</strong>: You must have a Gmail account to download receipts from your email.</p>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel5 d-block d-sm-none">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-lg-7">
        <h1 class="text-center">Get Started</h1>
        <br/>
        <p>Ride Receipts requires Chromium to operate. Please download Chromium and extract the folder on your <span class="underline">desktop</span> before using Ride Receipts.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="stepper-head">
          <a href="https://download-chromium.appspot.com/" target="_blank" rel="noreferrer" class="stepper-step step--chromium">
            Get Chromium
          </a>
          <div class="divider-horizontal"></div>
          <a href="#" id="downloadstep" class="stepper-step step--uberrun">
            Get Ride Receipts
          </a>
          <div class="divider-horizontal"></div>
          <a href="https://github.com/mrgodhani/uberrun" target="_blank" rel="noreferrer" class="stepper-step step--readme">
            Follow Readme File
          </a>
        </div>
      </div>
      <div class="col-sm-8 mx-auto mt-5 px-5">
        <p><strong>Uber users</strong>: The app will download your receipts/invoices directly from your Uber account.</p>
        <p><strong>Lyft users</strong>: You must have a Gmail account to download receipts from your email.</p>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel6">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-6 mx-auto">
        <img src="@asset('images/ride-receipts-app-icon.svg')" class="mx-auto d-block img-fluid" alt="Ride Receipts">
        <br/>
        <h1>Like our app? Buy us a coffee</h1>
        <p>
          Ride Receipts is open-source and totally free. If you found our app useful, please make a contribution. Your support helps us maintain the app and build new features.
        </p>
      </div>
      <div class="col-sm-10 col-lg-6 mx-auto">
        <form class="donate-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_donations">
          <input type="hidden" name="business" value="uberrunapp@gmail.com">
          <input type="hidden" name="item_name" value="Donation">
          <p>Please enter contribution amount.</p>
          <div class="form-row">
            <div class="col-xs-5">
              <input type="text" name="amount" class="form-control" id="amount" value="20.00" placeholder="20.00">
            </div>
            <div class="col-xs-4">
              <select name="currency_code" id="currency" class="custom-select mr-sm-2">
                <option value="AUD"  >AUD</option>
                <option value="CAD" selected >CAD</option>
                <option value="CZK"  >CZK</option>
                <option value="DKK"  >DKK</option>
                <option value="EUR"  >EUR</option>
                <option value="HKD"  >HKD</option>
                <option value="HUF"  >HUF</option>
                <option value="ILS"  >ILS</option>
                <option value="JPY"  >JPY</option>
                <option value="MXN"  >MXN</option>
                <option value="NOK"  >NOK</option>
                <option value="NZD"  >NZD</option>
                <option value="PHP"  >PHP</option>
                <option value="PLN"  >PLN</option>
                <option value="GBP"  >GBP</option>
                <option value="SEK"  >SEK</option>
                <option value="CHF"  >CHF</option>
                <option value="TWD"  >TWD</option>
                <option value="THB"  >THB</option>
                <option value="USD">USD</option>
              </select>
            </div>
          </div>
          <input type="submit" class="btn btn-get btn--donate" value="Submit" name="submit" alt="Contribute now using Paypal">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid panel7">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-6 mx-auto">
        <h1>Why do I need invoices?</h1>
        <p>
          Whether you work for yourself or get reimbursed by your employer for travel, you’ll likely need proper tax receipts and invoices for accounting purposes. Having to download them one by one is a daunting task, and even with the monthly business report, you still have to download them one month at a time. It would be a shame to lose out on the opportunity to claim your expenses. Avoid the hassle and get Ride Receipts!
        </p>
      </blockquote>
    </div>
    <div class="col-sm-10 col-lg-5 offset-lg-1 mx-auto">
      <blockquote class="blockquote">
        <p>
          “Generally, all of your claimed business expenses on your income tax return need to be supported with original documents, such as receipts (unfortunately credit card statements don’t count!) You can increase your income tax deductions by staying organized and having actual receipts supporting your business expenses. NO RECEIPTS = NO DEDUCTION”
        </p>
        <footer class="blockquote-footer">
          <a href="http://dntwtoronto.com/" target="_blank" referrer="noreferrer noopener"> DNTW Toronto LLP</a>
          <p>
            Chartered Professional Accountants<br/>
            Licensed Public Accountants
          </p>
        </footer>
      </blockquote>
    </div>
  </div>
  <br/>
  <div class="divider"></div>
</div>
</div>
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="text-center">Downloading Ride Receipts now..</h1>
        <p class="text-center">Note: Ride Receipts requires Chromium to operate. Please download it to your <span class="underline">desktop</span> and unzip the file before using Ride Receipts. </p>
        <p class="text-center"><a href="https://download-chromium.appspot.com/" target="_blank" rel="noreferrer">Click here to download Chromium</a></p>
      </div>
    </div>
  </div>
</div>
