<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.33.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.33.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETsanctum-csrf-cookie">
                                <a href="#endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET_ignition-health-check">
                                <a href="#endpoints-GET_ignition-health-check">GET _ignition/health-check</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POST_ignition-execute-solution">
                                <a href="#endpoints-POST_ignition-execute-solution">POST _ignition/execute-solution</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POST_ignition-update-config">
                                <a href="#endpoints-POST_ignition-update-config">POST _ignition/update-config</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETuser-cart">
                                <a href="#endpoints-GETuser-cart">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTuser-cart">
                                <a href="#endpoints-POSTuser-cart">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTuser-cart--id-">
                                <a href="#endpoints-PUTuser-cart--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEuser-cart--id-">
                                <a href="#endpoints-DELETEuser-cart--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTuser-rating-create">
                                <a href="#endpoints-POSTuser-rating-create">Store a newly created rating in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETuser-getwishlist">
                                <a href="#endpoints-GETuser-getwishlist">Get the user's wishlist.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTuser-wishlist-add">
                                <a href="#endpoints-POSTuser-wishlist-add">Add a product to the user's wishlist.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEuser-wishlist-delete">
                                <a href="#endpoints-DELETEuser-wishlist-delete">Delete a product from the user's wishlist.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-login">
                                <a href="#endpoints-POSTadmin-login">Admin login functionality.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-register">
                                <a href="#endpoints-POSTadmin-register">Admin registration functionality.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETadmin-cart">
                                <a href="#endpoints-GETadmin-cart">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-cart">
                                <a href="#endpoints-POSTadmin-cart">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTadmin-cart--id-">
                                <a href="#endpoints-PUTadmin-cart--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEadmin-cart--id-">
                                <a href="#endpoints-DELETEadmin-cart--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETadmin-payments">
                                <a href="#endpoints-GETadmin-payments">Get all payment methods.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-payment-create">
                                <a href="#endpoints-POSTadmin-payment-create">Create a new payment method.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHadmin-payment-update--id-">
                                <a href="#endpoints-PATCHadmin-payment-update--id-">Update an existing payment method.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEadmin-payment-delete--id-">
                                <a href="#endpoints-DELETEadmin-payment-delete--id-">Delete an existing payment method.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETadmin-promocodes">
                                <a href="#endpoints-GETadmin-promocodes">Get all promo codes.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-promocode-add">
                                <a href="#endpoints-POSTadmin-promocode-add">Add a new promo code.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-promocode-delete--id-">
                                <a href="#endpoints-POSTadmin-promocode-delete--id-">Delete an existing promo code.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-promocode-update--id-">
                                <a href="#endpoints-POSTadmin-promocode-update--id-">Update an existing promo code.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-activate-vendor--id-">
                                <a href="#endpoints-POSTadmin-activate-vendor--id-">Activate a vendor by their ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTadmin-suspend-vendor--id-">
                                <a href="#endpoints-POSTadmin-suspend-vendor--id-">Admin function to suspend a vendor account.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETadmin-get-all-vendors">
                                <a href="#endpoints-GETadmin-get-all-vendors">Admin function to get a list of all vendors.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTvendor-login">
                                <a href="#endpoints-POSTvendor-login">Authenticate a vendor based on provided credentials.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTvendor-register">
                                <a href="#endpoints-POSTvendor-register">Register a new vendor with the provided information.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETvendor-get-data">
                                <a href="#endpoints-GETvendor-get-data">Retrieve various data about the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETvendor-get-vendor-data">
                                <a href="#endpoints-GETvendor-get-vendor-data">Retrieve detailed information about the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTvendor-update-vendor-data">
                                <a href="#endpoints-POSTvendor-update-vendor-data">Update the data of the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts">
                                <a href="#endpoints-GETproducts">GET products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts--id-">
                                <a href="#endpoints-GETproducts--id-">Get details of a single product by its ID, including related information.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproducts-images--id-">
                                <a href="#endpoints-GETproducts-images--id-">Get images associated with a specific product.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHproducts--id-">
                                <a href="#endpoints-PATCHproducts--id-">Update a product for the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTproducts">
                                <a href="#endpoints-POSTproducts">Create a new product for the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEproducts--id-">
                                <a href="#endpoints-DELETEproducts--id-">Delete a product for the authenticated vendor.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETsearch">
                                <a href="#endpoints-GETsearch">Search for products based on a given query.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETproductsPages">
                                <a href="#endpoints-GETproductsPages">Get a paginated list of products.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETpayments">
                                <a href="#endpoints-GETpayments">Get all payment methods.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcategories">
                                <a href="#endpoints-GETcategories">Display a listing of all categories.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GEThealthcheck">
                                <a href="#endpoints-GEThealthcheck">Healthcheck</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GET-">
                                <a href="#endpoints-GET-">GET /</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-POSTuser-login">
                                <a href="#user-management-POSTuser-login">Log in a user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTuser-register">
                                <a href="#user-management-POSTuser-register">Register a new user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETuser-get-data">
                                <a href="#user-management-GETuser-get-data">Display the specified user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETuser-orders">
                                <a href="#user-management-GETuser-orders">Get the orders associated with the authenticated user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTuser-order-cancel--id-">
                                <a href="#user-management-POSTuser-order-cancel--id-">Cancel a specific order for the authenticated user.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 9, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETsanctum-csrf-cookie">Return an empty response simply to trigger the storage of the CSRF cookie in the browser.</h2>

<p>
</p>



<span id="example-requests-GETsanctum-csrf-cookie">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/sanctum/csrf-cookie" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsanctum-csrf-cookie">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IkNQNmRyUXFDU0Z4TVdPQ1NhYkkrbFE9PSIsInZhbHVlIjoibXpvNlZwZUhkZENoUXlqQ1gzU2Rwb3ZSSkFuN1h1N0YvclM1WHY2MkVFVUlnQXp6bzdiU0srbjNCRXlIOW1HczNWMExwYkE1NG9yS0ZyZEhGa0U2WlJuUzlwUnBQbFNSQktzYlRQcVc3TXlxcUM0ODFZVWZneWtHZFkzbXQwYjAiLCJtYWMiOiI1ZDhiYmVjYjljZGJmODRiYmNlYTZhZjk3MDI5Nzk0ZWYzOTc3OGYwNmFjOGVhNjc1YmJmNTM1YzdlZGNiZTVmIiwidGFnIjoiIn0%3D; expires=Sat, 09 Mar 2024 15:50:43 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IjNseFpQMTBzcGY5T2NPQ2lHbURMMlE9PSIsInZhbHVlIjoiNTVsdi8wTjRxRDlwTGRGeXEzbVMzWFVWaWhnMzZhcGdUQWU1WmI2Y3hzV3ZXWkJuOEMzOHcvNmkxamZYeGlBem1MRXphQy9XVXBEOUFJYmxQV3hUK3dTRFNBT2YrVWtyNTdoMHZjZ3BQc3dib0xYcGZFUGUwNXJ1UDc2Vkxzc1kiLCJtYWMiOiJjMzY0MWQ0NzY3ZWY5YzFiZDU2NjE1MjU4OWMxMmJmNWUyMjYwNGZhNmVkNDc2ZGUzODVjN2NjNTQyZDkyYTZlIiwidGFnIjoiIn0%3D; expires=Sat, 09 Mar 2024 15:50:43 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>
<code>Empty response</code>
 </pre>
    </span>
<span id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsanctum-csrf-cookie"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETsanctum-csrf-cookie" data-method="GET"
      data-path="sanctum/csrf-cookie"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsanctum-csrf-cookie"
                    onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsanctum-csrf-cookie"
                    onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsanctum-csrf-cookie"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>sanctum/csrf-cookie</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETsanctum-csrf-cookie"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GET_ignition-health-check">GET _ignition/health-check</h2>

<p>
</p>



<span id="example-requests-GET_ignition-health-check">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/_ignition/health-check" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/health-check"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET_ignition-health-check">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;can_execute_commands&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-GET_ignition-health-check" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET_ignition-health-check"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET_ignition-health-check"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET_ignition-health-check" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET_ignition-health-check">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET_ignition-health-check" data-method="GET"
      data-path="_ignition/health-check"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET_ignition-health-check', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET_ignition-health-check"
                    onclick="tryItOut('GET_ignition-health-check');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET_ignition-health-check"
                    onclick="cancelTryOut('GET_ignition-health-check');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET_ignition-health-check"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>_ignition/health-check</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GET_ignition-health-check"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET_ignition-health-check"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POST_ignition-execute-solution">POST _ignition/execute-solution</h2>

<p>
</p>



<span id="example-requests-POST_ignition-execute-solution">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/_ignition/execute-solution" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"solution\": \"aliquam\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/execute-solution"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "solution": "aliquam"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POST_ignition-execute-solution">
</span>
<span id="execution-results-POST_ignition-execute-solution" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POST_ignition-execute-solution"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POST_ignition-execute-solution"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POST_ignition-execute-solution" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POST_ignition-execute-solution">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POST_ignition-execute-solution" data-method="POST"
      data-path="_ignition/execute-solution"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POST_ignition-execute-solution', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POST_ignition-execute-solution"
                    onclick="tryItOut('POST_ignition-execute-solution');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POST_ignition-execute-solution"
                    onclick="cancelTryOut('POST_ignition-execute-solution');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POST_ignition-execute-solution"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>_ignition/execute-solution</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POST_ignition-execute-solution"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POST_ignition-execute-solution"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>solution</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="solution"                data-endpoint="POST_ignition-execute-solution"
               value="aliquam"
               data-component="body">
    <br>
<p>Example: <code>aliquam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parameters</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="parameters"                data-endpoint="POST_ignition-execute-solution"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-POST_ignition-update-config">POST _ignition/update-config</h2>

<p>
</p>



<span id="example-requests-POST_ignition-update-config">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/_ignition/update-config" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"theme\": \"light\",
    \"editor\": \"et\",
    \"hide_solutions\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/_ignition/update-config"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "theme": "light",
    "editor": "et",
    "hide_solutions": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POST_ignition-update-config">
</span>
<span id="execution-results-POST_ignition-update-config" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POST_ignition-update-config"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POST_ignition-update-config"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POST_ignition-update-config" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POST_ignition-update-config">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POST_ignition-update-config" data-method="POST"
      data-path="_ignition/update-config"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POST_ignition-update-config', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POST_ignition-update-config"
                    onclick="tryItOut('POST_ignition-update-config');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POST_ignition-update-config"
                    onclick="cancelTryOut('POST_ignition-update-config');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POST_ignition-update-config"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>_ignition/update-config</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POST_ignition-update-config"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POST_ignition-update-config"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>theme</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="theme"                data-endpoint="POST_ignition-update-config"
               value="light"
               data-component="body">
    <br>
<p>Example: <code>light</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>light</code></li> <li><code>dark</code></li> <li><code>auto</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>editor</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="editor"                data-endpoint="POST_ignition-update-config"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hide_solutions</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POST_ignition-update-config" style="display: none">
            <input type="radio" name="hide_solutions"
                   value="true"
                   data-endpoint="POST_ignition-update-config"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POST_ignition-update-config" style="display: none">
            <input type="radio" name="hide_solutions"
                   value="false"
                   data-endpoint="POST_ignition-update-config"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETuser-cart">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETuser-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/cart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-cart">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-cart" data-method="GET"
      data-path="user/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-cart"
                    onclick="tryItOut('GETuser-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-cart"
                    onclick="cancelTryOut('GETuser-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTuser-cart">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTuser-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/cart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-cart">
</span>
<span id="execution-results-POSTuser-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-cart" data-method="POST"
      data-path="user/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-cart"
                    onclick="tryItOut('POSTuser-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-cart"
                    onclick="cancelTryOut('POSTuser-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTuser-cart--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTuser-cart--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/user/cart/quod" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/cart/quod"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTuser-cart--id-">
</span>
<span id="execution-results-PUTuser-cart--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTuser-cart--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser-cart--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTuser-cart--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser-cart--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTuser-cart--id-" data-method="PUT"
      data-path="user/cart/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTuser-cart--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTuser-cart--id-"
                    onclick="tryItOut('PUTuser-cart--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTuser-cart--id-"
                    onclick="cancelTryOut('PUTuser-cart--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTuser-cart--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>user/cart/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>user/cart/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTuser-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTuser-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTuser-cart--id-"
               value="quod"
               data-component="url">
    <br>
<p>The ID of the cart. Example: <code>quod</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEuser-cart--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEuser-cart--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/user/cart/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/cart/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEuser-cart--id-">
</span>
<span id="execution-results-DELETEuser-cart--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEuser-cart--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser-cart--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEuser-cart--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser-cart--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEuser-cart--id-" data-method="DELETE"
      data-path="user/cart/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEuser-cart--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEuser-cart--id-"
                    onclick="tryItOut('DELETEuser-cart--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEuser-cart--id-"
                    onclick="cancelTryOut('DELETEuser-cart--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEuser-cart--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>user/cart/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEuser-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEuser-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEuser-cart--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the cart. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTuser-rating-create">Store a newly created rating in storage.</h2>

<p>
</p>



<span id="example-requests-POSTuser-rating-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/rating/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"rate\": 0
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/rating/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "rate": 0
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-rating-create">
</span>
<span id="execution-results-POSTuser-rating-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-rating-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-rating-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-rating-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-rating-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-rating-create" data-method="POST"
      data-path="user/rating/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-rating-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-rating-create"
                    onclick="tryItOut('POSTuser-rating-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-rating-create"
                    onclick="cancelTryOut('POSTuser-rating-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-rating-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/rating/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-rating-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-rating-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rate</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rate"                data-endpoint="POSTuser-rating-create"
               value="0"
               data-component="body">
    <br>
<p>Must be between 0 and 5. Example: <code>0</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETuser-getwishlist">Get the user&#039;s wishlist.</h2>

<p>
</p>



<span id="example-requests-GETuser-getwishlist">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/getwishlist" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/getwishlist"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-getwishlist">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Attempt to read property \&quot;id\&quot; on null&quot;,
    &quot;exception&quot;: &quot;ErrorException&quot;,
    &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\app\\Http\\Controllers\\WishListController.php&quot;,
    &quot;line&quot;: 13,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php&quot;,
            &quot;line&quot;: 255,
            &quot;function&quot;: &quot;handleError&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\app\\Http\\Controllers\\WishListController.php&quot;,
            &quot;line&quot;: 13,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;function&quot;: &quot;__construct&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\WishListController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 952,
            &quot;function&quot;: &quot;newInstanceArgs&quot;,
            &quot;class&quot;: &quot;ReflectionClass&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 795,
            &quot;function&quot;: &quot;build&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
            &quot;line&quot;: 957,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 731,
            &quot;function&quot;: &quot;resolve&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php&quot;,
            &quot;line&quot;: 942,
            &quot;function&quot;: &quot;make&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 278,
            &quot;function&quot;: &quot;make&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 1104,
            &quot;function&quot;: &quot;getController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 1035,
            &quot;function&quot;: &quot;controllerMiddleware&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 818,
            &quot;function&quot;: &quot;gatherMiddleware&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 800,
            &quot;function&quot;: &quot;gatherRouteMiddleware&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 784,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 748,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 737,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 200,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 99,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 300,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 91,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 236,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 163,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 125,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 72,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 211,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 326,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1096,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 324,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 201,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\artisan&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-getwishlist" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-getwishlist"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-getwishlist"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-getwishlist" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-getwishlist">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-getwishlist" data-method="GET"
      data-path="user/getwishlist"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-getwishlist', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-getwishlist"
                    onclick="tryItOut('GETuser-getwishlist');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-getwishlist"
                    onclick="cancelTryOut('GETuser-getwishlist');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-getwishlist"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/getwishlist</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-getwishlist"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-getwishlist"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTuser-wishlist-add">Add a product to the user&#039;s wishlist.</h2>

<p>
</p>



<span id="example-requests-POSTuser-wishlist-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/wishlist/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_id\": \"nam\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/wishlist/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "nam"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-wishlist-add">
</span>
<span id="execution-results-POSTuser-wishlist-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-wishlist-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-wishlist-add"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-wishlist-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-wishlist-add">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-wishlist-add" data-method="POST"
      data-path="user/wishlist/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-wishlist-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-wishlist-add"
                    onclick="tryItOut('POSTuser-wishlist-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-wishlist-add"
                    onclick="cancelTryOut('POSTuser-wishlist-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-wishlist-add"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/wishlist/add</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-wishlist-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-wishlist-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_id"                data-endpoint="POSTuser-wishlist-add"
               value="nam"
               data-component="body">
    <br>
<p>Example: <code>nam</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEuser-wishlist-delete">Delete a product from the user&#039;s wishlist.</h2>

<p>
</p>



<span id="example-requests-DELETEuser-wishlist-delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/user/wishlist/delete" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_id\": \"assumenda\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/wishlist/delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "assumenda"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEuser-wishlist-delete">
</span>
<span id="execution-results-DELETEuser-wishlist-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEuser-wishlist-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser-wishlist-delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEuser-wishlist-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser-wishlist-delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEuser-wishlist-delete" data-method="DELETE"
      data-path="user/wishlist/delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEuser-wishlist-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEuser-wishlist-delete"
                    onclick="tryItOut('DELETEuser-wishlist-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEuser-wishlist-delete"
                    onclick="cancelTryOut('DELETEuser-wishlist-delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEuser-wishlist-delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>user/wishlist/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEuser-wishlist-delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEuser-wishlist-delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_id"                data-endpoint="DELETEuser-wishlist-delete"
               value="assumenda"
               data-component="body">
    <br>
<p>Example: <code>assumenda</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTadmin-login">Admin login functionality.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"mbernier@example.org\",
    \"password\": \"jND*yL.=ADwpBC]d^R{Z\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "mbernier@example.org",
    "password": "jND*yL.=ADwpBC]d^R{Z"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-login">
</span>
<span id="execution-results-POSTadmin-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-login" data-method="POST"
      data-path="admin/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-login"
                    onclick="tryItOut('POSTadmin-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-login"
                    onclick="cancelTryOut('POSTadmin-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTadmin-login"
               value="mbernier@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>mbernier@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTadmin-login"
               value="jND*yL.=ADwpBC]d^R{Z"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>jND*yL.=ADwpBC]d^R{Z</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTadmin-register">Admin registration functionality.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fname\": \"wgaaqivwcozzsnlexjaccylgtzhxggtuahubicodourvwikuxqlkbgwbfguzuihbssppuokgsdicinmfjgtybvr\",
    \"lname\": \"fgdch\",
    \"email\": \"haylee94@example.net\",
    \"password\": \"X}=;EF&lt;R&gt;~H_B\\/\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fname": "wgaaqivwcozzsnlexjaccylgtzhxggtuahubicodourvwikuxqlkbgwbfguzuihbssppuokgsdicinmfjgtybvr",
    "lname": "fgdch",
    "email": "haylee94@example.net",
    "password": "X}=;EF&lt;R&gt;~H_B\/"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-register">
</span>
<span id="execution-results-POSTadmin-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-register" data-method="POST"
      data-path="admin/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-register"
                    onclick="tryItOut('POSTadmin-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-register"
                    onclick="cancelTryOut('POSTadmin-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fname"                data-endpoint="POSTadmin-register"
               value="wgaaqivwcozzsnlexjaccylgtzhxggtuahubicodourvwikuxqlkbgwbfguzuihbssppuokgsdicinmfjgtybvr"
               data-component="body">
    <br>
<p>Must be at least 3  characters. Example: <code>wgaaqivwcozzsnlexjaccylgtzhxggtuahubicodourvwikuxqlkbgwbfguzuihbssppuokgsdicinmfjgtybvr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lname"                data-endpoint="POSTadmin-register"
               value="fgdch"
               data-component="body">
    <br>
<p>Must be at least 3  characters. Example: <code>fgdch</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTadmin-register"
               value="haylee94@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>haylee94@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTadmin-register"
               value="X}=;EF<R>~H_B/"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>X}=;EF&lt;R&gt;~H_B/</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETadmin-cart">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETadmin-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/admin/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/cart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETadmin-cart">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETadmin-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETadmin-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETadmin-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETadmin-cart" data-method="GET"
      data-path="admin/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETadmin-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETadmin-cart"
                    onclick="tryItOut('GETadmin-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETadmin-cart"
                    onclick="cancelTryOut('GETadmin-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETadmin-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>admin/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETadmin-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETadmin-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTadmin-cart">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/cart"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-cart">
</span>
<span id="execution-results-POSTadmin-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-cart" data-method="POST"
      data-path="admin/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-cart"
                    onclick="tryItOut('POSTadmin-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-cart"
                    onclick="cancelTryOut('POSTadmin-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTadmin-cart--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTadmin-cart--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/admin/cart/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/cart/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTadmin-cart--id-">
</span>
<span id="execution-results-PUTadmin-cart--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTadmin-cart--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-cart--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTadmin-cart--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-cart--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTadmin-cart--id-" data-method="PUT"
      data-path="admin/cart/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTadmin-cart--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTadmin-cart--id-"
                    onclick="tryItOut('PUTadmin-cart--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTadmin-cart--id-"
                    onclick="cancelTryOut('PUTadmin-cart--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTadmin-cart--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>admin/cart/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>admin/cart/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTadmin-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTadmin-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTadmin-cart--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the cart. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEadmin-cart--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEadmin-cart--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/admin/cart/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/cart/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEadmin-cart--id-">
</span>
<span id="execution-results-DELETEadmin-cart--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEadmin-cart--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-cart--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEadmin-cart--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-cart--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEadmin-cart--id-" data-method="DELETE"
      data-path="admin/cart/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-cart--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEadmin-cart--id-"
                    onclick="tryItOut('DELETEadmin-cart--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEadmin-cart--id-"
                    onclick="cancelTryOut('DELETEadmin-cart--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEadmin-cart--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>admin/cart/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEadmin-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEadmin-cart--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEadmin-cart--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the cart. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETadmin-payments">Get all payment methods.</h2>

<p>
</p>



<span id="example-requests-GETadmin-payments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/admin/payments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/payments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETadmin-payments">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETadmin-payments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETadmin-payments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-payments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETadmin-payments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-payments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETadmin-payments" data-method="GET"
      data-path="admin/payments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETadmin-payments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETadmin-payments"
                    onclick="tryItOut('GETadmin-payments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETadmin-payments"
                    onclick="cancelTryOut('GETadmin-payments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETadmin-payments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>admin/payments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETadmin-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETadmin-payments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTadmin-payment-create">Create a new payment method.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-payment-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/payment/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/payment/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-payment-create">
</span>
<span id="execution-results-POSTadmin-payment-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-payment-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-payment-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-payment-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-payment-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-payment-create" data-method="POST"
      data-path="admin/payment/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-payment-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-payment-create"
                    onclick="tryItOut('POSTadmin-payment-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-payment-create"
                    onclick="cancelTryOut('POSTadmin-payment-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-payment-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/payment/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-payment-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-payment-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHadmin-payment-update--id-">Update an existing payment method.</h2>

<p>
</p>



<span id="example-requests-PATCHadmin-payment-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/admin/payment/update/similique" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/payment/update/similique"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHadmin-payment-update--id-">
</span>
<span id="execution-results-PATCHadmin-payment-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHadmin-payment-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHadmin-payment-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHadmin-payment-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHadmin-payment-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHadmin-payment-update--id-" data-method="PATCH"
      data-path="admin/payment/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHadmin-payment-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHadmin-payment-update--id-"
                    onclick="tryItOut('PATCHadmin-payment-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHadmin-payment-update--id-"
                    onclick="cancelTryOut('PATCHadmin-payment-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHadmin-payment-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>admin/payment/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHadmin-payment-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHadmin-payment-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PATCHadmin-payment-update--id-"
               value="similique"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>similique</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEadmin-payment-delete--id-">Delete an existing payment method.</h2>

<p>
</p>



<span id="example-requests-DELETEadmin-payment-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/admin/payment/delete/fugit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/payment/delete/fugit"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEadmin-payment-delete--id-">
</span>
<span id="execution-results-DELETEadmin-payment-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEadmin-payment-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-payment-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEadmin-payment-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-payment-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEadmin-payment-delete--id-" data-method="DELETE"
      data-path="admin/payment/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-payment-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEadmin-payment-delete--id-"
                    onclick="tryItOut('DELETEadmin-payment-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEadmin-payment-delete--id-"
                    onclick="cancelTryOut('DELETEadmin-payment-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEadmin-payment-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>admin/payment/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEadmin-payment-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEadmin-payment-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEadmin-payment-delete--id-"
               value="fugit"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>fugit</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETadmin-promocodes">Get all promo codes.</h2>

<p>
</p>



<span id="example-requests-GETadmin-promocodes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/admin/promocodes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/promocodes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETadmin-promocodes">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETadmin-promocodes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETadmin-promocodes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-promocodes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETadmin-promocodes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-promocodes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETadmin-promocodes" data-method="GET"
      data-path="admin/promocodes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETadmin-promocodes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETadmin-promocodes"
                    onclick="tryItOut('GETadmin-promocodes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETadmin-promocodes"
                    onclick="cancelTryOut('GETadmin-promocodes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETadmin-promocodes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>admin/promocodes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETadmin-promocodes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETadmin-promocodes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTadmin-promocode-add">Add a new promo code.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-promocode-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/promocode/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"molestiae\",
    \"percentage\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/promocode/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "molestiae",
    "percentage": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-promocode-add">
</span>
<span id="execution-results-POSTadmin-promocode-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-promocode-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-promocode-add"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-promocode-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-promocode-add">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-promocode-add" data-method="POST"
      data-path="admin/promocode/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-promocode-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-promocode-add"
                    onclick="tryItOut('POSTadmin-promocode-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-promocode-add"
                    onclick="cancelTryOut('POSTadmin-promocode-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-promocode-add"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/promocode/add</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-promocode-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-promocode-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTadmin-promocode-add"
               value="molestiae"
               data-component="body">
    <br>
<p>Example: <code>molestiae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>percentage</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="percentage"                data-endpoint="POSTadmin-promocode-add"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 100. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTadmin-promocode-delete--id-">Delete an existing promo code.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-promocode-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/promocode/delete/dolore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/promocode/delete/dolore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-promocode-delete--id-">
</span>
<span id="execution-results-POSTadmin-promocode-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-promocode-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-promocode-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-promocode-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-promocode-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-promocode-delete--id-" data-method="POST"
      data-path="admin/promocode/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-promocode-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-promocode-delete--id-"
                    onclick="tryItOut('POSTadmin-promocode-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-promocode-delete--id-"
                    onclick="cancelTryOut('POSTadmin-promocode-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-promocode-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/promocode/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-promocode-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-promocode-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTadmin-promocode-delete--id-"
               value="dolore"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>dolore</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTadmin-promocode-update--id-">Update an existing promo code.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-promocode-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/promocode/update/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"percentage\": 15
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/promocode/update/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "percentage": 15
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-promocode-update--id-">
</span>
<span id="execution-results-POSTadmin-promocode-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-promocode-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-promocode-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-promocode-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-promocode-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-promocode-update--id-" data-method="POST"
      data-path="admin/promocode/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-promocode-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-promocode-update--id-"
                    onclick="tryItOut('POSTadmin-promocode-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-promocode-update--id-"
                    onclick="cancelTryOut('POSTadmin-promocode-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-promocode-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/promocode/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-promocode-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-promocode-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTadmin-promocode-update--id-"
               value="voluptatem"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>voluptatem</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="code"                data-endpoint="POSTadmin-promocode-update--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>percentage</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="percentage"                data-endpoint="POSTadmin-promocode-update--id-"
               value="15"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 100. Example: <code>15</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTadmin-activate-vendor--id-">Activate a vendor by their ID.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-activate-vendor--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/activate-vendor/aut" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/activate-vendor/aut"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-activate-vendor--id-">
</span>
<span id="execution-results-POSTadmin-activate-vendor--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-activate-vendor--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-activate-vendor--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-activate-vendor--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-activate-vendor--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-activate-vendor--id-" data-method="POST"
      data-path="admin/activate-vendor/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-activate-vendor--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-activate-vendor--id-"
                    onclick="tryItOut('POSTadmin-activate-vendor--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-activate-vendor--id-"
                    onclick="cancelTryOut('POSTadmin-activate-vendor--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-activate-vendor--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/activate-vendor/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-activate-vendor--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-activate-vendor--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTadmin-activate-vendor--id-"
               value="aut"
               data-component="url">
    <br>
<p>The ID of the activate vendor. Example: <code>aut</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTadmin-suspend-vendor--id-">Admin function to suspend a vendor account.</h2>

<p>
</p>



<span id="example-requests-POSTadmin-suspend-vendor--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/admin/suspend-vendor/dolore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/suspend-vendor/dolore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTadmin-suspend-vendor--id-">
</span>
<span id="execution-results-POSTadmin-suspend-vendor--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTadmin-suspend-vendor--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-suspend-vendor--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTadmin-suspend-vendor--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-suspend-vendor--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTadmin-suspend-vendor--id-" data-method="POST"
      data-path="admin/suspend-vendor/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTadmin-suspend-vendor--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTadmin-suspend-vendor--id-"
                    onclick="tryItOut('POSTadmin-suspend-vendor--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTadmin-suspend-vendor--id-"
                    onclick="cancelTryOut('POSTadmin-suspend-vendor--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTadmin-suspend-vendor--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>admin/suspend-vendor/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTadmin-suspend-vendor--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTadmin-suspend-vendor--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTadmin-suspend-vendor--id-"
               value="dolore"
               data-component="url">
    <br>
<p>The ID of the suspend vendor. Example: <code>dolore</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETadmin-get-all-vendors">Admin function to get a list of all vendors.</h2>

<p>
</p>



<span id="example-requests-GETadmin-get-all-vendors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/admin/get-all-vendors" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/admin/get-all-vendors"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETadmin-get-all-vendors">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETadmin-get-all-vendors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETadmin-get-all-vendors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-get-all-vendors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETadmin-get-all-vendors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-get-all-vendors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETadmin-get-all-vendors" data-method="GET"
      data-path="admin/get-all-vendors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETadmin-get-all-vendors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETadmin-get-all-vendors"
                    onclick="tryItOut('GETadmin-get-all-vendors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETadmin-get-all-vendors"
                    onclick="cancelTryOut('GETadmin-get-all-vendors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETadmin-get-all-vendors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>admin/get-all-vendors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETadmin-get-all-vendors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETadmin-get-all-vendors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTvendor-login">Authenticate a vendor based on provided credentials.</h2>

<p>
</p>



<span id="example-requests-POSTvendor-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/vendor/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"xoconner@example.com\",
    \"password\": \"(*{X[tAf?\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/vendor/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "xoconner@example.com",
    "password": "(*{X[tAf?"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTvendor-login">
</span>
<span id="execution-results-POSTvendor-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTvendor-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTvendor-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTvendor-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTvendor-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTvendor-login" data-method="POST"
      data-path="vendor/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTvendor-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTvendor-login"
                    onclick="tryItOut('POSTvendor-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTvendor-login"
                    onclick="cancelTryOut('POSTvendor-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTvendor-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>vendor/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTvendor-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTvendor-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTvendor-login"
               value="xoconner@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>xoconner@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTvendor-login"
               value="(*{X[tAf?"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>(*{X[tAf?</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTvendor-register">Register a new vendor with the provided information.</h2>

<p>
</p>



<span id="example-requests-POSTvendor-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/vendor/register" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "fname=gnulvlnltpnocjbeuexvswcfujrxjydesfxdocrfwkbqpfdyscdeksyrypixgbvfdjprjzxzknmsoiiqmhxxqbx"\
    --form "lname=dgegyjdeumcussgsqkruzoamjzekleaadljbxjc"\
    --form "business_name=nymchbjbivtcxmkanyvy"\
    --form "email=annalise.bauch@example.net"\
    --form "phone_number=zsoexznuqqktuxmcsuukvgjljvlcwukvkv"\
    --form "password=H`5!|(8+5dg=1&lt;+&gt;dw"\
    --form "id_photo_front=@C:\Users\Khaled\AppData\Local\Temp\phpD93C.tmp" \
    --form "id_photo_back=@C:\Users\Khaled\AppData\Local\Temp\phpD94D.tmp" \
    --form "logo_pic=@C:\Users\Khaled\AppData\Local\Temp\phpD94E.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/vendor/register"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('fname', 'gnulvlnltpnocjbeuexvswcfujrxjydesfxdocrfwkbqpfdyscdeksyrypixgbvfdjprjzxzknmsoiiqmhxxqbx');
body.append('lname', 'dgegyjdeumcussgsqkruzoamjzekleaadljbxjc');
body.append('business_name', 'nymchbjbivtcxmkanyvy');
body.append('email', 'annalise.bauch@example.net');
body.append('phone_number', 'zsoexznuqqktuxmcsuukvgjljvlcwukvkv');
body.append('password', 'H`5!|(8+5dg=1&lt;+&gt;dw');
body.append('id_photo_front', document.querySelector('input[name="id_photo_front"]').files[0]);
body.append('id_photo_back', document.querySelector('input[name="id_photo_back"]').files[0]);
body.append('logo_pic', document.querySelector('input[name="logo_pic"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTvendor-register">
</span>
<span id="execution-results-POSTvendor-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTvendor-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTvendor-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTvendor-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTvendor-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTvendor-register" data-method="POST"
      data-path="vendor/register"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTvendor-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTvendor-register"
                    onclick="tryItOut('POSTvendor-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTvendor-register"
                    onclick="cancelTryOut('POSTvendor-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTvendor-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>vendor/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTvendor-register"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTvendor-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fname"                data-endpoint="POSTvendor-register"
               value="gnulvlnltpnocjbeuexvswcfujrxjydesfxdocrfwkbqpfdyscdeksyrypixgbvfdjprjzxzknmsoiiqmhxxqbx"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>gnulvlnltpnocjbeuexvswcfujrxjydesfxdocrfwkbqpfdyscdeksyrypixgbvfdjprjzxzknmsoiiqmhxxqbx</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lname"                data-endpoint="POSTvendor-register"
               value="dgegyjdeumcussgsqkruzoamjzekleaadljbxjc"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>dgegyjdeumcussgsqkruzoamjzekleaadljbxjc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>business_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="business_name"                data-endpoint="POSTvendor-register"
               value="nymchbjbivtcxmkanyvy"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>nymchbjbivtcxmkanyvy</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTvendor-register"
               value="annalise.bauch@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>annalise.bauch@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTvendor-register"
               value="zsoexznuqqktuxmcsuukvgjljvlcwukvkv"
               data-component="body">
    <br>
<p>Must not be greater than 11 characters. Must be at least 11 characters. Example: <code>zsoexznuqqktuxmcsuukvgjljvlcwukvkv</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTvendor-register"
               value="H`5!|(8+5dg=1<+>dw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>H</code>5!|(8+5dg=1&lt;+&gt;dw`</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id_photo_front</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="id_photo_front"                data-endpoint="POSTvendor-register"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must be an image. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpD93C.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id_photo_back</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="id_photo_back"                data-endpoint="POSTvendor-register"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must be an image. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpD94D.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_pic</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="logo_pic"                data-endpoint="POSTvendor-register"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must be an image. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpD94E.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETvendor-get-data">Retrieve various data about the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-GETvendor-get-data">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/vendor/get-data" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/vendor/get-data"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETvendor-get-data">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETvendor-get-data" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETvendor-get-data"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETvendor-get-data"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETvendor-get-data" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETvendor-get-data">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETvendor-get-data" data-method="GET"
      data-path="vendor/get-data"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETvendor-get-data', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETvendor-get-data"
                    onclick="tryItOut('GETvendor-get-data');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETvendor-get-data"
                    onclick="cancelTryOut('GETvendor-get-data');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETvendor-get-data"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>vendor/get-data</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETvendor-get-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETvendor-get-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETvendor-get-vendor-data">Retrieve detailed information about the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-GETvendor-get-vendor-data">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/vendor/get-vendor-data" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/vendor/get-vendor-data"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETvendor-get-vendor-data">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETvendor-get-vendor-data" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETvendor-get-vendor-data"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETvendor-get-vendor-data"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETvendor-get-vendor-data" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETvendor-get-vendor-data">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETvendor-get-vendor-data" data-method="GET"
      data-path="vendor/get-vendor-data"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETvendor-get-vendor-data', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETvendor-get-vendor-data"
                    onclick="tryItOut('GETvendor-get-vendor-data');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETvendor-get-vendor-data"
                    onclick="cancelTryOut('GETvendor-get-vendor-data');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETvendor-get-vendor-data"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>vendor/get-vendor-data</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETvendor-get-vendor-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETvendor-get-vendor-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTvendor-update-vendor-data">Update the data of the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-POSTvendor-update-vendor-data">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/vendor/update-vendor-data" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "fname=wdfh"\
    --form "lname=rpjwwnuxpnsg"\
    --form "businessname=ngcuibwkljlrk"\
    --form "email=laurine79@example.net"\
    --form "phone_number=zwwqpcryjlvoooiodconraesnvyptmwhjbercahkcbiwvnupvsdcub"\
    --form "logo_pic=@C:\Users\Khaled\AppData\Local\Temp\phpD96E.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/vendor/update-vendor-data"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('fname', 'wdfh');
body.append('lname', 'rpjwwnuxpnsg');
body.append('businessname', 'ngcuibwkljlrk');
body.append('email', 'laurine79@example.net');
body.append('phone_number', 'zwwqpcryjlvoooiodconraesnvyptmwhjbercahkcbiwvnupvsdcub');
body.append('logo_pic', document.querySelector('input[name="logo_pic"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTvendor-update-vendor-data">
</span>
<span id="execution-results-POSTvendor-update-vendor-data" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTvendor-update-vendor-data"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTvendor-update-vendor-data"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTvendor-update-vendor-data" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTvendor-update-vendor-data">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTvendor-update-vendor-data" data-method="POST"
      data-path="vendor/update-vendor-data"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTvendor-update-vendor-data', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTvendor-update-vendor-data"
                    onclick="tryItOut('POSTvendor-update-vendor-data');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTvendor-update-vendor-data"
                    onclick="cancelTryOut('POSTvendor-update-vendor-data');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTvendor-update-vendor-data"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>vendor/update-vendor-data</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTvendor-update-vendor-data"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTvendor-update-vendor-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="fname"                data-endpoint="POSTvendor-update-vendor-data"
               value="wdfh"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>wdfh</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="lname"                data-endpoint="POSTvendor-update-vendor-data"
               value="rpjwwnuxpnsg"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>rpjwwnuxpnsg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>businessname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="businessname"                data-endpoint="POSTvendor-update-vendor-data"
               value="ngcuibwkljlrk"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>ngcuibwkljlrk</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTvendor-update-vendor-data"
               value="laurine79@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>laurine79@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTvendor-update-vendor-data"
               value="zwwqpcryjlvoooiodconraesnvyptmwhjbercahkcbiwvnupvsdcub"
               data-component="body">
    <br>
<p>Must not be greater than 11 characters. Must be at least 11 characters. Example: <code>zwwqpcryjlvoooiodconraesnvyptmwhjbercahkcbiwvnupvsdcub</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo_pic</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="logo_pic"                data-endpoint="POSTvendor-update-vendor-data"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must be an image. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpD96E.tmp</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETproducts">GET products</h2>

<p>
</p>



<span id="example-requests-GETproducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;products&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Evangeline Koch&quot;,
            &quot;price&quot;: &quot;207.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T19:57:57.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 5,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Gaetano Crona&quot;,
            &quot;price&quot;: &quot;909.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 6,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Edgar Prohaska PhD&quot;,
            &quot;price&quot;: &quot;241.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Belle Thompson&quot;,
            &quot;price&quot;: &quot;939.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 8,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Shaniya Upton&quot;,
            &quot;price&quot;: &quot;223.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 9,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Alanna Howell DVM&quot;,
            &quot;price&quot;: &quot;600.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Harley Bechtelar&quot;,
            &quot;price&quot;: &quot;340.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 11,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Grace Bernier&quot;,
            &quot;price&quot;: &quot;462.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 12,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mona Rutherford&quot;,
            &quot;price&quot;: &quot;522.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 13,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jon Kuphal&quot;,
            &quot;price&quot;: &quot;682.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 14,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Margret Rohan&quot;,
            &quot;price&quot;: &quot;529.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 15,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Bailey Will&quot;,
            &quot;price&quot;: &quot;615.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 16,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Daniela Dare&quot;,
            &quot;price&quot;: &quot;636.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 17,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Gretchen Goyette&quot;,
            &quot;price&quot;: &quot;412.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 18,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Angelica Murazik&quot;,
            &quot;price&quot;: &quot;954.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 19,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Joana Runolfsson&quot;,
            &quot;price&quot;: &quot;977.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 20,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Glenda Welch&quot;,
            &quot;price&quot;: &quot;65.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 21,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Cassandra Herman&quot;,
            &quot;price&quot;: &quot;276.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 22,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Hector Nitzsche&quot;,
            &quot;price&quot;: &quot;734.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 23,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Hillary Keebler&quot;,
            &quot;price&quot;: &quot;299.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 24,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Enola Beatty III&quot;,
            &quot;price&quot;: &quot;664.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 25,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Celestine Hyatt&quot;,
            &quot;price&quot;: &quot;443.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 26,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;June Walter&quot;,
            &quot;price&quot;: &quot;591.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 27,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Melyna Wiza&quot;,
            &quot;price&quot;: &quot;954.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 28,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Garrison Weber&quot;,
            &quot;price&quot;: &quot;602.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 18,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 29,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Khalil Harvey&quot;,
            &quot;price&quot;: &quot;156.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 30,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Bernadine Gleason&quot;,
            &quot;price&quot;: &quot;793.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 31,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mrs. Aliyah Kunze MD&quot;,
            &quot;price&quot;: &quot;138.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 32,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mathias Lynch&quot;,
            &quot;price&quot;: &quot;843.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 33,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Fredy O&#039;Kon&quot;,
            &quot;price&quot;: &quot;665.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 34,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Jovany Quitzon&quot;,
            &quot;price&quot;: &quot;416.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 35,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mrs. Lily Herman&quot;,
            &quot;price&quot;: &quot;758.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 36,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ms. Raina Roberts&quot;,
            &quot;price&quot;: &quot;678.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 37,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jaime Bechtelar&quot;,
            &quot;price&quot;: &quot;386.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 38,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Zachary Padberg&quot;,
            &quot;price&quot;: &quot;500.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 39,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Alisha Block&quot;,
            &quot;price&quot;: &quot;99.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 40,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Shaina O&#039;Keefe&quot;,
            &quot;price&quot;: &quot;886.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 18,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 41,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Rigoberto Nicolas PhD&quot;,
            &quot;price&quot;: &quot;666.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 42,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Giovani Olson&quot;,
            &quot;price&quot;: &quot;401.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 43,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Brooks Schumm&quot;,
            &quot;price&quot;: &quot;503.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 44,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Layne Lang&quot;,
            &quot;price&quot;: &quot;990.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 45,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Frankie Bogisich&quot;,
            &quot;price&quot;: &quot;823.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 46,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ara Cormier&quot;,
            &quot;price&quot;: &quot;805.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 47,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Aidan McCullough&quot;,
            &quot;price&quot;: &quot;33.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 48,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Paige Goldner&quot;,
            &quot;price&quot;: &quot;688.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 49,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jarrell Stroman&quot;,
            &quot;price&quot;: &quot;672.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 50,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Claudie O&#039;Hara&quot;,
            &quot;price&quot;: &quot;891.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 51,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Xzavier Trantow&quot;,
            &quot;price&quot;: &quot;713.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 52,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ms. Naomie Hagenes PhD&quot;,
            &quot;price&quot;: &quot;794.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 53,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Paige Kutch&quot;,
            &quot;price&quot;: &quot;107.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 54,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Kirstin Lynch&quot;,
            &quot;price&quot;: &quot;669.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 55,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Miss Daisy Renner I&quot;,
            &quot;price&quot;: &quot;587.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 56,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Garrison Cassin DVM&quot;,
            &quot;price&quot;: &quot;670.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 57,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jules Schowalter V&quot;,
            &quot;price&quot;: &quot;302.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 58,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Craig Kreiger&quot;,
            &quot;price&quot;: &quot;126.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 59,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Brody Hirthe&quot;,
            &quot;price&quot;: &quot;731.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 60,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Allen Blick&quot;,
            &quot;price&quot;: &quot;813.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 61,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Marge Littel&quot;,
            &quot;price&quot;: &quot;544.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 62,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Norris Hayes Jr.&quot;,
            &quot;price&quot;: &quot;479.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 63,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Maya Connelly PhD&quot;,
            &quot;price&quot;: &quot;73.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:01:06.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 64,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:34:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:34:10.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 65,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:35:27.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:35:27.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 66,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:39:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:39:21.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 67,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:39:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:39:45.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 68,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:41:32.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:41:32.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 69,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:46:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:46:16.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 70,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:49:31.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:49:31.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 71,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Lilliana Thiel MD&quot;,
            &quot;price&quot;: &quot;341.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 72,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Emmanuel Kirlin&quot;,
            &quot;price&quot;: &quot;55.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 18,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 73,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Christina Lesch&quot;,
            &quot;price&quot;: &quot;39.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 74,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Fernando Dickinson&quot;,
            &quot;price&quot;: &quot;47.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 75,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jan Schaefer&quot;,
            &quot;price&quot;: &quot;350.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 76,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Deion Kub&quot;,
            &quot;price&quot;: &quot;299.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 77,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Selena O&#039;Keefe&quot;,
            &quot;price&quot;: &quot;865.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 78,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Esteban Wiegand DDS&quot;,
            &quot;price&quot;: &quot;624.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 79,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Claudia Larkin&quot;,
            &quot;price&quot;: &quot;291.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 80,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Kody Rohan Jr.&quot;,
            &quot;price&quot;: &quot;558.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 81,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Laurine Lockman&quot;,
            &quot;price&quot;: &quot;529.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 82,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Al Carroll&quot;,
            &quot;price&quot;: &quot;983.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 83,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ova Hoeger&quot;,
            &quot;price&quot;: &quot;180.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 84,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Garrick Halvorson&quot;,
            &quot;price&quot;: &quot;131.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 85,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Earnest Wehner&quot;,
            &quot;price&quot;: &quot;23.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 86,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Aubree Emard&quot;,
            &quot;price&quot;: &quot;474.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 87,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Mellie Ratke&quot;,
            &quot;price&quot;: &quot;692.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 88,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Leonor Streich&quot;,
            &quot;price&quot;: &quot;579.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 89,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Kellie Reilly&quot;,
            &quot;price&quot;: &quot;312.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 90,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Marcus Mosciski&quot;,
            &quot;price&quot;: &quot;518.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 91,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Velda Beier Jr.&quot;,
            &quot;price&quot;: &quot;978.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 92,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Bonita Bailey&quot;,
            &quot;price&quot;: &quot;283.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 93,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Josh Marquardt&quot;,
            &quot;price&quot;: &quot;826.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 94,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Makenzie Ullrich&quot;,
            &quot;price&quot;: &quot;987.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 18,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 95,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Myles Thiel&quot;,
            &quot;price&quot;: &quot;530.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 96,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ara Moen&quot;,
            &quot;price&quot;: &quot;605.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 18,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 97,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Brannon Leannon III&quot;,
            &quot;price&quot;: &quot;141.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 98,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Chasity Thompson&quot;,
            &quot;price&quot;: &quot;89.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 99,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Stone Hickle Sr.&quot;,
            &quot;price&quot;: &quot;74.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 100,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Garland Cronin&quot;,
            &quot;price&quot;: &quot;317.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 101,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ephraim Stracke&quot;,
            &quot;price&quot;: &quot;863.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 102,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Josh O&#039;Reilly Sr.&quot;,
            &quot;price&quot;: &quot;195.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 103,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Anibal Champlin&quot;,
            &quot;price&quot;: &quot;170.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 104,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Benjamin Schulist V&quot;,
            &quot;price&quot;: &quot;798.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 105,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Tamia Kuhn&quot;,
            &quot;price&quot;: &quot;16.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 106,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Florencio Cummings&quot;,
            &quot;price&quot;: &quot;732.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 107,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Christop Anderson&quot;,
            &quot;price&quot;: &quot;607.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 108,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Maximillian Russel&quot;,
            &quot;price&quot;: &quot;28.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 109,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Nick Johns&quot;,
            &quot;price&quot;: &quot;523.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 110,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Rachel Okuneva DVM&quot;,
            &quot;price&quot;: &quot;442.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 111,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Elisa Wuckert&quot;,
            &quot;price&quot;: &quot;625.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 112,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Abbigail Mayert&quot;,
            &quot;price&quot;: &quot;944.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 113,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Dr. Mandy Willms&quot;,
            &quot;price&quot;: &quot;908.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 114,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mr. Brain Stanton&quot;,
            &quot;price&quot;: &quot;730.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 115,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Rosemary Rowe&quot;,
            &quot;price&quot;: &quot;618.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 116,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Leone Dickens&quot;,
            &quot;price&quot;: &quot;189.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 117,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Leonardo Steuber&quot;,
            &quot;price&quot;: &quot;853.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 118,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Sonny McCullough I&quot;,
            &quot;price&quot;: &quot;417.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 119,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Clarabelle Stoltenberg&quot;,
            &quot;price&quot;: &quot;452.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 120,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Gladys Von&quot;,
            &quot;price&quot;: &quot;45.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 121,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Miles Brown PhD&quot;,
            &quot;price&quot;: &quot;739.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 16,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 122,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Mrs. Janiya Hills&quot;,
            &quot;price&quot;: &quot;12.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 123,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Miss Antonetta Halvorson II&quot;,
            &quot;price&quot;: &quot;453.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 124,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Bernice Skiles&quot;,
            &quot;price&quot;: &quot;476.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 15,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 125,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Laverne Schiller&quot;,
            &quot;price&quot;: &quot;865.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 13,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 126,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Julio Hickle&quot;,
            &quot;price&quot;: &quot;457.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 127,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Prof. Travis Greenfelder I&quot;,
            &quot;price&quot;: &quot;215.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 128,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ashlynn Dietrich&quot;,
            &quot;price&quot;: &quot;547.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 129,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Cory Upton I&quot;,
            &quot;price&quot;: &quot;961.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 2,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 130,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ms. Carmen Rutherford I&quot;,
            &quot;price&quot;: &quot;912.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 20,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T05:50:46.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        },
        {
            &quot;id&quot;: 131,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;created_at&quot;: &quot;2024-03-08T14:44:05.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-03-08T14:44:05.000000Z&quot;,
            &quot;category_id&quot;: 1,
            &quot;images&quot;: []
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts" data-method="GET"
      data-path="products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts"
                    onclick="tryItOut('GETproducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts"
                    onclick="cancelTryOut('GETproducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETproducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETproducts--id-">Get details of a single product by its ID, including related information.</h2>

<p>
</p>



<span id="example-requests-GETproducts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Product Found&quot;,
    &quot;product&quot;: {
        &quot;id&quot;: 4,
        &quot;vendor_id&quot;: 1,
        &quot;product_name&quot;: &quot;Evangeline Koch&quot;,
        &quot;price&quot;: &quot;207.00&quot;,
        &quot;discount&quot;: &quot;0.00&quot;,
        &quot;stock&quot;: 19,
        &quot;is_on_sale&quot;: 0,
        &quot;category_id&quot;: 2,
        &quot;descreption&quot;: &quot;&quot;,
        &quot;averageRating&quot;: &quot;4.54&quot;
    },
    &quot;ratings&quot;: [
        {
            &quot;rate&quot;: 2,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 2,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        },
        {
            &quot;rate&quot;: 5,
            &quot;review&quot;: &quot;This is review 4 for the product.&quot;,
            &quot;user_id&quot;: 6
        }
    ],
    &quot;category&quot;: &quot;Example 2&quot;,
    &quot;images&quot;: [],
    &quot;recommended&quot;: [
        {
            &quot;id&quot;: 73,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Christina Lesch&quot;,
            &quot;price&quot;: &quot;39.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 11,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;Et qui rerum architecto. Sunt ex expedita qui possimus assumenda sequi temporibus.&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Jon Kuphal&quot;,
            &quot;price&quot;: &quot;682.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 17,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Cassandra Herman&quot;,
            &quot;price&quot;: &quot;276.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 128,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Ashlynn Dietrich&quot;,
            &quot;price&quot;: &quot;547.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;Sed aut qui non alias. Quidem temporibus qui in rerum. Ipsum sed laboriosam sed et. Occaecati quos et commodi omnis et ratione.&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 67,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;testProduct&quot;,
            &quot;price&quot;: &quot;231.00&quot;,
            &quot;discount&quot;: &quot;0.20&quot;,
            &quot;stock&quot;: 10,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 103,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Anibal Champlin&quot;,
            &quot;price&quot;: &quot;170.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 19,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;Facere libero accusantium dolorem nostrum voluptas at. Blanditiis fuga nam ea est et. Atque ab optio sit unde omnis alias. Et error quo at consequatur.&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Shaniya Upton&quot;,
            &quot;price&quot;: &quot;223.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 14,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        },
        {
            &quot;id&quot;: 111,
            &quot;vendor_id&quot;: 1,
            &quot;product_name&quot;: &quot;Elisa Wuckert&quot;,
            &quot;price&quot;: &quot;625.00&quot;,
            &quot;discount&quot;: &quot;0.00&quot;,
            &quot;stock&quot;: 12,
            &quot;is_on_sale&quot;: 0,
            &quot;category_id&quot;: 1,
            &quot;descreption&quot;: &quot;Blanditiis quasi eum dolore suscipit tempore quis odio. Dolorum quis facilis autem assumenda. Deleniti aut officiis quam.&quot;,
            &quot;averageRating&quot;: &quot;0.00&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts--id-" data-method="GET"
      data-path="products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts--id-"
                    onclick="tryItOut('GETproducts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts--id-"
                    onclick="cancelTryOut('GETproducts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETproducts--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETproducts-images--id-">Get images associated with a specific product.</h2>

<p>
</p>



<span id="example-requests-GETproducts-images--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/products/images/voluptatem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/images/voluptatem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproducts-images--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;images&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETproducts-images--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproducts-images--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproducts-images--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproducts-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproducts-images--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproducts-images--id-" data-method="GET"
      data-path="products/images/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproducts-images--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproducts-images--id-"
                    onclick="tryItOut('GETproducts-images--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproducts-images--id-"
                    onclick="cancelTryOut('GETproducts-images--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproducts-images--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>products/images/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETproducts-images--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproducts-images--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETproducts-images--id-"
               value="voluptatem"
               data-component="url">
    <br>
<p>The ID of the image. Example: <code>voluptatem</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHproducts--id-">Update a product for the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-PATCHproducts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/products/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHproducts--id-">
</span>
<span id="execution-results-PATCHproducts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHproducts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHproducts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHproducts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHproducts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHproducts--id-" data-method="PATCH"
      data-path="products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHproducts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHproducts--id-"
                    onclick="tryItOut('PATCHproducts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHproducts--id-"
                    onclick="cancelTryOut('PATCHproducts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHproducts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHproducts--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTproducts">Create a new product for the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-POSTproducts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/products" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "product_name=repellat"\
    --form "price=472140.1558"\
    --form "discount=16066257.315809"\
    --form "stock=12"\
    --form "is_on_sale=1"\
    --form "category_id=18"\
    --form "descreption=crtmlviqmhzdbtsqdbbzuaxktihneyyxcnkqgwxrioz"\
    --form "image1=@C:\Users\Khaled\AppData\Local\Temp\phpDAC7.tmp" \
    --form "image2=@C:\Users\Khaled\AppData\Local\Temp\phpDAC8.tmp" \
    --form "image3=@C:\Users\Khaled\AppData\Local\Temp\phpDAD8.tmp" \
    --form "image4=@C:\Users\Khaled\AppData\Local\Temp\phpDAD9.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('product_name', 'repellat');
body.append('price', '472140.1558');
body.append('discount', '16066257.315809');
body.append('stock', '12');
body.append('is_on_sale', '1');
body.append('category_id', '18');
body.append('descreption', 'crtmlviqmhzdbtsqdbbzuaxktihneyyxcnkqgwxrioz');
body.append('image1', document.querySelector('input[name="image1"]').files[0]);
body.append('image2', document.querySelector('input[name="image2"]').files[0]);
body.append('image3', document.querySelector('input[name="image3"]').files[0]);
body.append('image4', document.querySelector('input[name="image4"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTproducts">
</span>
<span id="execution-results-POSTproducts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTproducts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTproducts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTproducts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTproducts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTproducts" data-method="POST"
      data-path="products"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTproducts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTproducts"
                    onclick="tryItOut('POSTproducts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTproducts"
                    onclick="cancelTryOut('POSTproducts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTproducts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTproducts"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTproducts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_name"                data-endpoint="POSTproducts"
               value="repellat"
               data-component="body">
    <br>
<p>Example: <code>repellat</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTproducts"
               value="472140.1558"
               data-component="body">
    <br>
<p>Example: <code>472140.1558</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>discount</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="discount"                data-endpoint="POSTproducts"
               value="16066257.315809"
               data-component="body">
    <br>
<p>Example: <code>16066257.315809</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="POSTproducts"
               value="12"
               data-component="body">
    <br>
<p>Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_on_sale</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTproducts" style="display: none">
            <input type="radio" name="is_on_sale"
                   value="true"
                   data-endpoint="POSTproducts"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTproducts" style="display: none">
            <input type="radio" name="is_on_sale"
                   value="false"
                   data-endpoint="POSTproducts"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="POSTproducts"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image1</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image1"                data-endpoint="POSTproducts"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpDAC7.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image2</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image2"                data-endpoint="POSTproducts"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpDAC8.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image3</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image3"                data-endpoint="POSTproducts"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpDAD8.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image4</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="image4"                data-endpoint="POSTproducts"
               value=""
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes. Example: <code>C:\Users\Khaled\AppData\Local\Temp\phpDAD9.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>descreption</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="descreption"                data-endpoint="POSTproducts"
               value="crtmlviqmhzdbtsqdbbzuaxktihneyyxcnkqgwxrioz"
               data-component="body">
    <br>
<p>Must be at least 10 characters. Example: <code>crtmlviqmhzdbtsqdbbzuaxktihneyyxcnkqgwxrioz</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEproducts--id-">Delete a product for the authenticated vendor.</h2>

<p>
</p>



<span id="example-requests-DELETEproducts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/products/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/products/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEproducts--id-">
</span>
<span id="execution-results-DELETEproducts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEproducts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEproducts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEproducts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEproducts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEproducts--id-" data-method="DELETE"
      data-path="products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEproducts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEproducts--id-"
                    onclick="tryItOut('DELETEproducts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEproducts--id-"
                    onclick="cancelTryOut('DELETEproducts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEproducts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEproducts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEproducts--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETsearch">Search for products based on a given query.</h2>

<p>
</p>



<span id="example-requests-GETsearch">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETsearch">
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Please provide a search query.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETsearch" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETsearch"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETsearch"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETsearch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsearch">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETsearch" data-method="GET"
      data-path="search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETsearch', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETsearch"
                    onclick="tryItOut('GETsearch');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETsearch"
                    onclick="cancelTryOut('GETsearch');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETsearch"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETsearch"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETsearch"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETproductsPages">Get a paginated list of products.</h2>

<p>
</p>



<span id="example-requests-GETproductsPages">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/productsPages" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/productsPages"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETproductsPages">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Undefined array key \&quot;page\&quot;&quot;,
    &quot;exception&quot;: &quot;ErrorException&quot;,
    &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\app\\Http\\Controllers\\api\\ProductController.php&quot;,
    &quot;line&quot;: 315,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php&quot;,
            &quot;line&quot;: 255,
            &quot;function&quot;: &quot;handleError&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\app\\Http\\Controllers\\api\\ProductController.php&quot;,
            &quot;line&quot;: 315,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Bootstrap\\HandleExceptions&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;getProductsPerPage&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\api\\ProductController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 43,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 259,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 806,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 805,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 784,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 748,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 737,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 200,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 99,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 300,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 91,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 236,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 163,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 125,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 72,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 211,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 326,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1096,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 324,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 201,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\artisan&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETproductsPages" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETproductsPages"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETproductsPages"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETproductsPages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETproductsPages">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETproductsPages" data-method="GET"
      data-path="productsPages"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETproductsPages', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETproductsPages"
                    onclick="tryItOut('GETproductsPages');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETproductsPages"
                    onclick="cancelTryOut('GETproductsPages');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETproductsPages"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>productsPages</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETproductsPages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETproductsPages"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETpayments">Get all payment methods.</h2>

<p>
</p>



<span id="example-requests-GETpayments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/payments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/payments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETpayments">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;SQLSTATE[42S02]: Base table or view not found: 1146 Table &#039;grad.payment_methods&#039; doesn&#039;t exist (Connection: mysql, SQL: select * from `payment_methods`)&quot;,
    &quot;exception&quot;: &quot;Illuminate\\Database\\QueryException&quot;,
    &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
    &quot;line&quot;: 829,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
            &quot;line&quot;: 783,
            &quot;function&quot;: &quot;runQueryCallback&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
            &quot;line&quot;: 414,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php&quot;,
            &quot;line&quot;: 2751,
            &quot;function&quot;: &quot;select&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php&quot;,
            &quot;line&quot;: 2740,
            &quot;function&quot;: &quot;runSelect&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php&quot;,
            &quot;line&quot;: 3294,
            &quot;function&quot;: &quot;Illuminate\\Database\\Query\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php&quot;,
            &quot;line&quot;: 2739,
            &quot;function&quot;: &quot;onceWithColumns&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php&quot;,
            &quot;line&quot;: 738,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php&quot;,
            &quot;line&quot;: 722,
            &quot;function&quot;: &quot;getModels&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php&quot;,
            &quot;line&quot;: 674,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\app\\Http\\Controllers\\PaymentController.php&quot;,
            &quot;line&quot;: 17,
            &quot;function&quot;: &quot;all&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;getAllPayment&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\PaymentController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 43,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 259,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 806,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 805,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 784,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 748,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 737,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 200,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 99,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 119,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 300,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 288,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 91,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 236,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 163,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 125,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 72,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 211,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 326,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1096,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 324,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 175,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 201,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\projects\\gpproject\\ecommerce-multi-vendor\\artisan&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETpayments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETpayments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETpayments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETpayments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpayments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETpayments" data-method="GET"
      data-path="payments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETpayments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETpayments"
                    onclick="tryItOut('GETpayments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETpayments"
                    onclick="cancelTryOut('GETpayments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETpayments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>payments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETpayments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETpayments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETcategories">Display a listing of all categories.</h2>

<p>
</p>



<span id="example-requests-GETcategories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcategories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Example 1&quot;,
            &quot;image&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Example 2&quot;,
            &quot;image&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETcategories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcategories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcategories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcategories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcategories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcategories" data-method="GET"
      data-path="categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcategories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcategories"
                    onclick="tryItOut('GETcategories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcategories"
                    onclick="cancelTryOut('GETcategories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcategories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETcategories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcategories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GEThealthcheck">Healthcheck</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GEThealthcheck">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/healthcheck" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/healthcheck"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GEThealthcheck">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;up&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;up&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Service is unhealthy):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;down&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;down&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GEThealthcheck" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GEThealthcheck"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GEThealthcheck"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GEThealthcheck" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThealthcheck">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GEThealthcheck" data-method="GET"
      data-path="healthcheck"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GEThealthcheck', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GEThealthcheck"
                    onclick="tryItOut('GEThealthcheck');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GEThealthcheck"
                    onclick="cancelTryOut('GEThealthcheck');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GEThealthcheck"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>healthcheck</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GEThealthcheck"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GEThealthcheck"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The status of this API (<code>up</code> or <code>down</code>).</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>services</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>Map of each downstream service and their status (<code>up</code> or <code>down</code>).</p>
        </div>
                        <h2 id="endpoints-GET-">GET /</h2>

<p>
</p>



<span id="example-requests-GET-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GET-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6Ingvdjlub3ozMXlsRDJTQWdkYk9jVnc9PSIsInZhbHVlIjoiVlhma3B6VVUva2twZ0hsTWNFQWFxdk9HMjM5RXRKRTNnQ0pIRmtXdS9Kd2ZBWFA1NFNVcVROSnpkb2ZPWkFJaFMzLzBvenV5eGtQRE9hWG9mZnN4RGxCQ0tyWVlnN1dyaVdFcVplbVdKZVRvT2ViUTRNWERRd1lSdXhqeGtLREsiLCJtYWMiOiJjYTNhMDRjNGY1NjQ2MzA4Yzg1NGVjNzQ2YzU2NTFkMmJhODkwMjc1ZDI2MmU3Mjc2NjgwZDRiNmJkMTIwMGMzIiwidGFnIjoiIn0%3D; expires=Sat, 09 Mar 2024 15:50:44 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IllyTzNQREFsYXQvTFhXcmYwQitMR2c9PSIsInZhbHVlIjoicUJEQUZiRnVUNExpeStrdjlWRElLUGdSY2JVNWtueW9GZ2YxT0c4LzZoWGoyZjQ4SWt2cHJzOE96RlpXVzFSSmRaNGUvR3o4WG91MDRxT3VDaExYN3JsaXhIVk4wWlpTcDlvNFZ6OTVjVWZPUVd5cnlFTGRub0R5eTNQZDRCaCsiLCJtYWMiOiI4ZDJhZTc3YjY5ZDk3ZmIyZDliZmNmYTJmY2YyMWRkNTA2NWYyNjlkMzc5ZTc0M2YyYTI4NjY3OWFlMTg1NzRmIiwidGFnIjoiIn0%3D; expires=Sat, 09 Mar 2024 15:50:44 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;

        &lt;title&gt;Laravel&lt;/title&gt;

        &lt;!-- Fonts --&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.bunny.net&quot;&gt;
        &lt;link href=&quot;https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap&quot; rel=&quot;stylesheet&quot; /&gt;

        &lt;!-- Styles --&gt;
        &lt;style&gt;
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:&#039;&#039;}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url(&quot;data:image/svg+xml,%3Csvg width=&#039;30&#039; height=&#039;30&#039; viewBox=&#039;0 0 30 30&#039; fill=&#039;none&#039; xmlns=&#039;http://www.w3.org/2000/svg&#039;%3E%3Cpath d=&#039;M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z&#039; fill=&#039;rgba(0,0,0,0.07)&#039;/%3E%3C/svg%3E&quot;)}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url(&quot;data:image/svg+xml,%3Csvg width=&#039;30&#039; height=&#039;30&#039; viewBox=&#039;0 0 30 30&#039; fill=&#039;none&#039; xmlns=&#039;http://www.w3.org/2000/svg&#039;%3E%3Cpath d=&#039;M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z&#039; fill=&#039;rgba(255,255,255,0.07)&#039;/%3E%3C/svg%3E&quot;)}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body class=&quot;antialiased&quot;&gt;
        &lt;div class=&quot;relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white&quot;&gt;
            
            &lt;div class=&quot;max-w-7xl mx-auto p-6 lg:p-8&quot;&gt;
                &lt;div class=&quot;flex justify-center&quot;&gt;
                    &lt;svg viewBox=&quot;0 0 62 65&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-16 w-auto bg-gray-100 dark:bg-gray-900&quot;&gt;
                        &lt;path d=&quot;M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z&quot; fill=&quot;#FF2D20&quot;/&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;

                &lt;div class=&quot;mt-16&quot;&gt;
                    &lt;div class=&quot;grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8&quot;&gt;
                        &lt;a href=&quot;https://laravel.com/docs&quot; class=&quot;scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full&quot;&gt;
                                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;w-7 h-7 stroke-red-500&quot;&gt;
                                        &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25&quot; /&gt;
                                    &lt;/svg&gt;
                                &lt;/div&gt;

                                &lt;h2 class=&quot;mt-6 text-xl font-semibold text-gray-900 dark:text-white&quot;&gt;Documentation&lt;/h2&gt;

                                &lt;p class=&quot;mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                &lt;/p&gt;
                            &lt;/div&gt;

                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;self-center shrink-0 stroke-red-500 w-6 h-6 mx-6&quot;&gt;
                                &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75&quot; /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;a href=&quot;https://laracasts.com&quot; class=&quot;scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full&quot;&gt;
                                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;w-7 h-7 stroke-red-500&quot;&gt;
                                        &lt;path stroke-linecap=&quot;round&quot; d=&quot;M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z&quot; /&gt;
                                    &lt;/svg&gt;
                                &lt;/div&gt;

                                &lt;h2 class=&quot;mt-6 text-xl font-semibold text-gray-900 dark:text-white&quot;&gt;Laracasts&lt;/h2&gt;

                                &lt;p class=&quot;mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                &lt;/p&gt;
                            &lt;/div&gt;

                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;self-center shrink-0 stroke-red-500 w-6 h-6 mx-6&quot;&gt;
                                &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75&quot; /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;a href=&quot;https://laravel-news.com&quot; class=&quot;scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full&quot;&gt;
                                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;w-7 h-7 stroke-red-500&quot;&gt;
                                        &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z&quot; /&gt;
                                    &lt;/svg&gt;
                                &lt;/div&gt;

                                &lt;h2 class=&quot;mt-6 text-xl font-semibold text-gray-900 dark:text-white&quot;&gt;Laravel News&lt;/h2&gt;

                                &lt;p class=&quot;mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                &lt;/p&gt;
                            &lt;/div&gt;

                            &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;self-center shrink-0 stroke-red-500 w-6 h-6 mx-6&quot;&gt;
                                &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75&quot; /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class=&quot;scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full&quot;&gt;
                                    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; class=&quot;w-7 h-7 stroke-red-500&quot;&gt;
                                        &lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64&quot; /&gt;
                                    &lt;/svg&gt;
                                &lt;/div&gt;

                                &lt;h2 class=&quot;mt-6 text-xl font-semibold text-gray-900 dark:text-white&quot;&gt;Vibrant Ecosystem&lt;/h2&gt;

                                &lt;p class=&quot;mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed&quot;&gt;
                                    Laravel&#039;s robust library of first-party tools and libraries, such as &lt;a href=&quot;https://forge.laravel.com&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Forge&lt;/a&gt;, &lt;a href=&quot;https://vapor.laravel.com&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Vapor&lt;/a&gt;, &lt;a href=&quot;https://nova.laravel.com&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Nova&lt;/a&gt;, and &lt;a href=&quot;https://envoyer.io&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Envoyer&lt;/a&gt; help you take your projects to the next level. Pair them with powerful open source libraries like &lt;a href=&quot;https://laravel.com/docs/billing&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Cashier&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/dusk&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Dusk&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/broadcasting&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Echo&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/horizon&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Horizon&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/sanctum&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Sanctum&lt;/a&gt;, &lt;a href=&quot;https://laravel.com/docs/telescope&quot; class=&quot;underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500&quot;&gt;Telescope&lt;/a&gt;, and more.
                                &lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;div class=&quot;flex justify-center mt-16 px-0 sm:items-center sm:justify-between&quot;&gt;
                    &lt;div class=&quot;text-center text-sm sm:text-left&quot;&gt;
                        &amp;nbsp;
                    &lt;/div&gt;

                    &lt;div class=&quot;text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0&quot;&gt;
                        Laravel v10.45.1 (PHP v8.2.12)
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GET-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GET-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GET-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GET-" data-method="GET"
      data-path="/"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GET-"
                    onclick="tryItOut('GET-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GET-"
                    onclick="cancelTryOut('GET-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GET-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>/</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GET-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="user-management">User management</h1>

    <p>APIs for managing users</p>

                                <h2 id="user-management-POSTuser-login">Log in a user.</h2>

<p>
</p>



<span id="example-requests-POSTuser-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"jmante@example.org\",
    \"password\": \"2&lt;FERI#cgw-@n_z\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jmante@example.org",
    "password": "2&lt;FERI#cgw-@n_z"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-login">
</span>
<span id="execution-results-POSTuser-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-login" data-method="POST"
      data-path="user/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-login"
                    onclick="tryItOut('POSTuser-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-login"
                    onclick="cancelTryOut('POSTuser-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTuser-login"
               value="jmante@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>jmante@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTuser-login"
               value="2<FERI#cgw-@n_z"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>2&lt;FERI#cgw-@n_z</code></p>
        </div>
        </form>

                    <h2 id="user-management-POSTuser-register">Register a new user.</h2>

<p>
</p>



<span id="example-requests-POSTuser-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fname\": \"cbvblvfihhszwkgedlhnjyyvfzxbf\",
    \"lname\": \"suwrfiwpsspgqluofadakxhecsdimfkuctvd\",
    \"email\": \"christian.doyle@example.com\",
    \"password\": \"?s;\'HB[,KRpOpp6kF8i\",
    \"phone_number\": \"ltcsnilhitythzjc\",
    \"birth_date\": \"sit\",
    \"address\": \"excepturi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fname": "cbvblvfihhszwkgedlhnjyyvfzxbf",
    "lname": "suwrfiwpsspgqluofadakxhecsdimfkuctvd",
    "email": "christian.doyle@example.com",
    "password": "?s;'HB[,KRpOpp6kF8i",
    "phone_number": "ltcsnilhitythzjc",
    "birth_date": "sit",
    "address": "excepturi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-register">
</span>
<span id="execution-results-POSTuser-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-register" data-method="POST"
      data-path="user/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-register"
                    onclick="tryItOut('POSTuser-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-register"
                    onclick="cancelTryOut('POSTuser-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>fname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="fname"                data-endpoint="POSTuser-register"
               value="cbvblvfihhszwkgedlhnjyyvfzxbf"
               data-component="body">
    <br>
<p>Must be at least 3  characters. Example: <code>cbvblvfihhszwkgedlhnjyyvfzxbf</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="lname"                data-endpoint="POSTuser-register"
               value="suwrfiwpsspgqluofadakxhecsdimfkuctvd"
               data-component="body">
    <br>
<p>Must be at least 3  characters. Example: <code>suwrfiwpsspgqluofadakxhecsdimfkuctvd</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTuser-register"
               value="christian.doyle@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>christian.doyle@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTuser-register"
               value="?s;'HB[,KRpOpp6kF8i"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>?s;'HB[,KRpOpp6kF8i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone_number"                data-endpoint="POSTuser-register"
               value="ltcsnilhitythzjc"
               data-component="body">
    <br>
<p>Must not be greater than 11  characters. Must be at least 11 characters. Example: <code>ltcsnilhitythzjc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="birth_date"                data-endpoint="POSTuser-register"
               value="sit"
               data-component="body">
    <br>
<p>Example: <code>sit</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTuser-register"
               value="excepturi"
               data-component="body">
    <br>
<p>Example: <code>excepturi</code></p>
        </div>
        </form>

                    <h2 id="user-management-GETuser-get-data">Display the specified user.</h2>

<p>
</p>



<span id="example-requests-GETuser-get-data">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/get-data" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/get-data"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-get-data">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-get-data" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-get-data"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-get-data"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-get-data" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-get-data">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-get-data" data-method="GET"
      data-path="user/get-data"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-get-data', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-get-data"
                    onclick="tryItOut('GETuser-get-data');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-get-data"
                    onclick="cancelTryOut('GETuser-get-data');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-get-data"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/get-data</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-get-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-get-data"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-management-GETuser-orders">Get the orders associated with the authenticated user.</h2>

<p>
</p>



<span id="example-requests-GETuser-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/user/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/orders"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETuser-orders">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETuser-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETuser-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETuser-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETuser-orders" data-method="GET"
      data-path="user/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETuser-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETuser-orders"
                    onclick="tryItOut('GETuser-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETuser-orders"
                    onclick="cancelTryOut('GETuser-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETuser-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>user/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETuser-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETuser-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-management-POSTuser-order-cancel--id-">Cancel a specific order for the authenticated user.</h2>

<p>
</p>



<span id="example-requests-POSTuser-order-cancel--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/user/order/cancel/voluptatibus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/user/order/cancel/voluptatibus"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTuser-order-cancel--id-">
</span>
<span id="execution-results-POSTuser-order-cancel--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTuser-order-cancel--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-order-cancel--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTuser-order-cancel--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-order-cancel--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTuser-order-cancel--id-" data-method="POST"
      data-path="user/order/cancel/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTuser-order-cancel--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTuser-order-cancel--id-"
                    onclick="tryItOut('POSTuser-order-cancel--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTuser-order-cancel--id-"
                    onclick="cancelTryOut('POSTuser-order-cancel--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTuser-order-cancel--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>user/order/cancel/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTuser-order-cancel--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTuser-order-cancel--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTuser-order-cancel--id-"
               value="voluptatibus"
               data-component="url">
    <br>
<p>The ID of the cancel. Example: <code>voluptatibus</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
