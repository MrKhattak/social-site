@push('styles')
<style>
    .modal-actions button.btn-tabs.active {
        border-bottom: 2px solid var(--primary);
    }

    .modal-actions button.btn-tabs {
        outline: none;
    }

    .modal-actions button.btn-tabs:hover,
    .modal-actions button.btn-tabs:active {
        outline: none;
    }

    .profile-change-card {
        width: 90%;
        max-width: unset;
        overflow-x: hidden;
        overflow-y: clip;
    }

    .card-footer button {
        width: auto;
    }

    #gerenal-info input {
        border-radius: 0.25rem;
        border-color: #ced4da;
    }

    .modal-actions button {
        flex: 1;
    }

</style>

<link rel="stylesheet" href="{{asset("js/cropper/cropper.min.css")}}">
<style>
    body {
        position: relative;
        min-height: 100vh;
    }

    .model {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(148 147 147 / 32%);
    }

    .model .model-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        height: 70%;
        width: 70%;
        background-color: white;
    }

    .btn.btn-sm.btn-success {
        background-image: linear-gradient(#ff6961, #ffa500f7);
        border-color: #ff6961;
    }

    @media(max-width: 1200px) {
        .model .model-inner {
            width: clamp(95%, 90%, 90%);
        }
    }

    .model .model-inner .image-div img {
        max-width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .model .model-inner .image-div {
        width: 100%;
        height: 80%;
    }

    .cropper-view-box,
    .cropper-face {
        border-radius: 50%;
    }

    #gerenal-info {
        width: 100%;
        position: absolute;
        top: 0;
        transition: all 500ms linear;
        transform: translateX(100%);
    }

    #add-friend {
        width: 100%;
        position: absolute;
        top: 0;
        transition: all 500ms linear;
        transform: translateX(100%);
    }

    #gerenal-info label {
        font-weight: 600;
        font-size: 1.1rem;
        width: 100%;
        text-align: center;
    }

    #profile-pic-div {
        transition: all 500ms linear;
    }

    #add-friend .add-friend-btn {
        background: linear-gradient(180deg, rgb(242, 137, 56), rgb(239 59 117));
        color: black;
        font-size: 1rem;
    }

    button.btn-tabs {
        width: 100%;
        border: none !important;
        background: #f3f3f3;
        margin: 10px;
        padding: 10px 35px;
    }

    button.btn-tabs.active {
        background: linear-gradient(#ff6961, #ffa500f7) !important;
    }

    button.btn-next-step {
        background: linear-gradient(#ff6961, #ffa500f7) !important;

    }

    .profile-change-card .card-header {
        background: white;
    }

    @media(max-width: 700px) {
        .modal-actions {
            display: grid !important;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
        }

        .modal-actions>button#btn-tab-1 {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        button.btn-tabs {
            width: unset;
        }

        #result-image {
            width: 200px;
            height: 200px;
        }

        .profile-change-card {
            width: 98%;
        }

    }

    @media(max-width: 500px) {
        .modal-actions {
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr;
        }

        .modal-actions>button#btn-tab-1 {
            grid-column-start: initial;
            grid-column-end: initial;
        }
    }

    .btn-tabs:focus {
        box-shadow: none;
    }

    #image {
        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        bottom: 5%;
        right: 5%;
    }

    input#image::after {
        position: absolute;
        content: '\f030';
        font-size: 1.5rem;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: orange;
        color: white;
        top: 0;
        left: 0;
        font-weight: 900;
        font-family: 'Font Awesome 5 Free';
    }

    .heading-small {
        color: #e25865;
        text-align: left;
        font-size: 1.2rem;
        padding: 4px 0;
        letter-spacing: .04em;
        text-transform: uppercase;
    }

    .mb20 {
        margin-bottom: 0;
        margin-top: 40px;
    }

</style>
@endpush

<div class="card profile-change-card">
    <div class="card-header">
        <div class="modal-actions d-flex justify-content-between">
            <button id="btn-tab-1" class="btn btn-tabs active">Profile Pic</button>
            <button id="btn-tab-2" class="btn btn-tabs">Gerenal Info</button>
            <button id="btn-tab-3" class="btn btn-tabs">Add Friends</button>
        </div>
    </div>
    <div class="card-body" style="overflow-x: hidden;">
        <div id="profile-pic-div" style="width: 100%">
            <div class="form-group row justify-content-center align-items-center" style="vertical-align: middle; font-family: 'Montserrat', sans-serif;">
                <strong style="color: #e04e5c; font-size: 2rem; margin-right: 20px; font-weight: 700;">Welcome</strong> <span style="font-size: 1.9rem; color: #007bff; font-weight: 500;"> {{explode(" ", trim(Auth::user()->name))[0]}}</span>
            </div>
            <p style="color: #e04e5c; text-align: center;font-size: 1.1rem;">Lets start with you profile</p>

            <div class="form-group mt-5 row justify-content-center">
                <div class="position-relative">
                    @if(Auth::user()->gender === "male")
                    <img src="{{asset('storage/images/static/blank_profile_male.jpg')}}" id="result-image" alt="Profile Pic" width="250" height="250" style="border-radius: 50%; border: 1px solid gray;padding: 2px;">
                    @elseif(Auth::user()->gender === "female")
                    <img src="{{asset('storage/images/static/blank_profile_female.jpg')}}" id="result-image" alt="Profile Pic" width="250" height="250" style="border-radius: 50%; border: 1px solid gray;padding: 2px;">
                    @else
                    <img src="{{asset('storage/images/static/default_profile.jpg')}}" id="result-image" alt="Profile Pic" width="250" height="250" style="border-radius: 50%; border: 1px solid gray;padding: 2px;">
                    @endif
                    <input type="file" id="image">
                </div>
            </div>
            <input type="hidden" name="image" id="server-result-image" class="d-none" hidden>
        </div>

        <div id="gerenal-info">
            <div class="js_wizard-content x-hidden" style="display: block;">
                <div class="text-center">
                    <h3 class="mb5" style="color: #e04e5c;">Update your info</h3>
                </div>
                <div>
                    <div class="heading-small mb20">
                        Location
                    </div>
                    <div class="pl-md-4">
                        <div class="form-group"> <label class="form-control-label" for="country">Country</label> <select class="form-control" name="country" id="country">
                                <option value="230">United States</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Albania</option>
                                <option value="3">Algeria</option>
                                <option value="4">American Samoa</option>
                                <option value="5">Andorra</option>
                                <option value="6">Angola</option>
                                <option value="7">Anguilla</option>
                                <option value="8">Antarctica</option>
                                <option value="9">Antigua and Barbuda</option>
                                <option value="10">Argentina</option>
                                <option value="11">Armenia</option>
                                <option value="12">Aruba</option>
                                <option value="13">Australia</option>
                                <option value="14">Austria</option>
                                <option value="15">Azerbaijan</option>
                                <option value="16">Bahamas</option>
                                <option value="17">Bahrain</option>
                                <option value="18">Bangladesh</option>
                                <option value="19">Barbados</option>
                                <option value="20">Belarus</option>
                                <option value="21">Belgium</option>
                                <option value="22">Belize</option>
                                <option value="23">Benin</option>
                                <option value="24">Bermuda</option>
                                <option value="25">Bhutan</option>
                                <option value="26">Bolivia</option>
                                <option value="27">Bosnia and Herzegovina</option>
                                <option value="28">Botswana</option>
                                <option value="29">Bouvet Island</option>
                                <option value="30">Brazil</option>
                                <option value="31">British Indian Ocean Territory</option>
                                <option value="32">Brunei Darussalam</option>
                                <option value="33">Bulgaria</option>
                                <option value="34">Burkina Faso</option>
                                <option value="35">Burundi</option>
                                <option value="36">Cambodia</option>
                                <option value="37">Cameroon</option>
                                <option value="38">Canada</option>
                                <option value="39">Cape Verde</option>
                                <option value="40">Cayman Islands</option>
                                <option value="41">Central African Republic</option>
                                <option value="42">Chad</option>
                                <option value="43">Chile</option>
                                <option value="44">China</option>
                                <option value="45">Christmas Island</option>
                                <option value="46">Cocos (Keeling) Islands</option>
                                <option value="47">Colombia</option>
                                <option value="48">Comoros</option>
                                <option value="49">Congo</option>
                                <option value="50">Cook Islands</option>
                                <option value="51">Costa Rica</option>
                                <option value="52">Croatia (Hrvatska)</option>
                                <option value="53">Cuba</option>
                                <option value="54">Cyprus</option>
                                <option value="55">Czech Republic</option>
                                <option value="56">Denmark</option>
                                <option value="57">Djibouti</option>
                                <option value="58">Dominica</option>
                                <option value="59">Dominican Republic</option>
                                <option value="60">East Timor</option>
                                <option value="61">Ecuador</option>
                                <option value="62">Egypt</option>
                                <option value="63">El Salvador</option>
                                <option value="64">Equatorial Guinea</option>
                                <option value="65">Eritrea</option>
                                <option value="66">Estonia</option>
                                <option value="67">Ethiopia</option>
                                <option value="68">Falkland Islands (Malvinas)</option>
                                <option value="69">Faroe Islands</option>
                                <option value="70">Fiji</option>
                                <option value="71">Finland</option>
                                <option value="72">France</option>
                                <option value="73">France, Metropolitan</option>
                                <option value="74">French Guiana</option>
                                <option value="75">French Polynesia</option>
                                <option value="76">French Southern Territories</option>
                                <option value="77">Gabon</option>
                                <option value="78">Gambia</option>
                                <option value="79">Georgia</option>
                                <option value="80">Germany</option>
                                <option value="81">Ghana</option>
                                <option value="82">Gibraltar</option>
                                <option value="83">Guernsey</option>
                                <option value="84">Greece</option>
                                <option value="85">Greenland</option>
                                <option value="86">Grenada</option>
                                <option value="87">Guadeloupe</option>
                                <option value="88">Guam</option>
                                <option value="89">Guatemala</option>
                                <option value="90">Guinea</option>
                                <option value="91">Guinea-Bissau</option>
                                <option value="92">Guyana</option>
                                <option value="93">Haiti</option>
                                <option value="94">Heard and Mc Donald Islands</option>
                                <option value="95">Honduras</option>
                                <option value="96">Hong Kong</option>
                                <option value="97">Hungary</option>
                                <option value="98">Iceland</option>
                                <option value="99">India</option>
                                <option value="100">Isle of Man</option>
                                <option value="101">Indonesia</option>
                                <option value="102">Iran (Islamic Republic of)</option>
                                <option value="103">Iraq</option>
                                <option value="104">Ireland</option>
                                <option value="105">Israel</option>
                                <option value="106">Italy</option>
                                <option value="107">Ivory Coast</option>
                                <option value="108">Jersey</option>
                                <option value="109">Jamaica</option>
                                <option value="110">Japan</option>
                                <option value="111">Jordan</option>
                                <option value="112">Kazakhstan</option>
                                <option value="113">Kenya</option>
                                <option value="114">Kiribati</option>
                                <option value="115">Korea, Democratic People's Republic of</option>
                                <option value="116">Korea, Republic of</option>
                                <option value="117">Kosovo</option>
                                <option value="118">Kuwait</option>
                                <option value="119">Kyrgyzstan</option>
                                <option value="120">Lao People's Democratic Republic</option>
                                <option value="121">Latvia</option>
                                <option value="122">Lebanon</option>
                                <option value="123">Lesotho</option>
                                <option value="124">Liberia</option>
                                <option value="125">Libyan Arab Jamahiriya</option>
                                <option value="126">Liechtenstein</option>
                                <option value="127">Lithuania</option>
                                <option value="128">Luxembourg</option>
                                <option value="129">Macau</option>
                                <option value="130">Macedonia</option>
                                <option value="131">Madagascar</option>
                                <option value="132">Malawi</option>
                                <option value="133">Malaysia</option>
                                <option value="134">Maldives</option>
                                <option value="135">Mali</option>
                                <option value="136">Malta</option>
                                <option value="137">Marshall Islands</option>
                                <option value="138">Martinique</option>
                                <option value="139">Mauritania</option>
                                <option value="140">Mauritius</option>
                                <option value="141">Mayotte</option>
                                <option value="142">Mexico</option>
                                <option value="143">Micronesia, Federated States of</option>
                                <option value="144">Moldova, Republic of</option>
                                <option value="145">Monaco</option>
                                <option value="146">Mongolia</option>
                                <option value="147">Montenegro</option>
                                <option value="148">Montserrat</option>
                                <option value="149">Morocco</option>
                                <option value="150">Mozambique</option>
                                <option value="151">Myanmar</option>
                                <option value="152">Namibia</option>
                                <option value="153">Nauru</option>
                                <option value="154">Nepal</option>
                                <option value="155">Netherlands</option>
                                <option value="156">Netherlands Antilles</option>
                                <option value="157">New Caledonia</option>
                                <option value="158">New Zealand</option>
                                <option value="159">Nicaragua</option>
                                <option value="160">Niger</option>
                                <option value="161">Nigeria</option>
                                <option value="162">Niue</option>
                                <option value="163">Norfolk Island</option>
                                <option value="164">Northern Mariana Islands</option>
                                <option value="165">Norway</option>
                                <option value="166">Oman</option>
                                <option value="167">Pakistan</option>
                                <option value="168">Palau</option>
                                <option value="169">Palestine</option>
                                <option value="170">Panama</option>
                                <option value="171">Papua New Guinea</option>
                                <option value="172">Paraguay</option>
                                <option value="173">Peru</option>
                                <option value="174">Philippines</option>
                                <option value="175">Pitcairn</option>
                                <option value="176">Poland</option>
                                <option value="177">Portugal</option>
                                <option value="178">Puerto Rico</option>
                                <option value="179">Qatar</option>
                                <option value="180">Reunion</option>
                                <option value="181">Romania</option>
                                <option value="182">Russian Federation</option>
                                <option value="183">Rwanda</option>
                                <option value="184">Saint Kitts and Nevis</option>
                                <option value="185">Saint Lucia</option>
                                <option value="186">Saint Vincent and the Grenadines</option>
                                <option value="187">Samoa</option>
                                <option value="188">San Marino</option>
                                <option value="189">Sao Tome and Principe</option>
                                <option value="190">Saudi Arabia</option>
                                <option value="191">Senegal</option>
                                <option value="192">Serbia</option>
                                <option value="193">Seychelles</option>
                                <option value="194">Sierra Leone</option>
                                <option value="195">Singapore</option>
                                <option value="196">Slovakia</option>
                                <option value="197">Slovenia</option>
                                <option value="198">Solomon Islands</option>
                                <option value="199">Somalia</option>
                                <option value="200">South Africa</option>
                                <option value="201">South Georgia South Sandwich Islands</option>
                                <option value="202">Spain</option>
                                <option value="203">Sri Lanka</option>
                                <option value="204">St. Helena</option>
                                <option value="205">St. Pierre and Miquelon</option>
                                <option value="206">Sudan</option>
                                <option value="207">Suriname</option>
                                <option value="208">Svalbard and Jan Mayen Islands</option>
                                <option value="209">Swaziland</option>
                                <option value="210">Sweden</option>
                                <option value="211">Switzerland</option>
                                <option value="212">Syrian Arab Republic</option>
                                <option value="213">Taiwan</option>
                                <option value="214">Tajikistan</option>
                                <option value="215">Tanzania, United Republic of</option>
                                <option value="216">Thailand</option>
                                <option value="217">Togo</option>
                                <option value="218">Tokelau</option>
                                <option value="219">Tonga</option>
                                <option value="220">Trinidad and Tobago</option>
                                <option value="221">Tunisia</option>
                                <option value="222">Turkey</option>
                                <option value="223">Turkmenistan</option>
                                <option value="224">Turks and Caicos Islands</option>
                                <option value="225">Tuvalu</option>
                                <option value="226">Uganda</option>
                                <option value="227">Ukraine</option>
                                <option value="228">United Arab Emirates</option>
                                <option value="229">United Kingdom</option>
                                <option value="230">United States</option>
                                <option value="231">United States minor outlying islands</option>
                                <option value="232">Uruguay</option>
                                <option value="233">Uzbekistan</option>
                                <option value="234">Vanuatu</option>
                                <option value="235">Vatican City State</option>
                                <option value="236">Venezuela</option>
                                <option value="237">Vietnam</option>
                                <option value="238">Virgin Islands (British)</option>
                                <option value="239">Virgin Islands (U.S.)</option>
                                <option value="240">Wallis and Futuna Islands</option>
                                <option value="241">Western Sahara</option>
                                <option value="242">Yemen</option>
                                <option value="243">Zaire</option>
                                <option value="244">Zambia</option>
                                <option value="245">Zimbabwe</option>
                            </select> </div>
                        <div class="row">
                            <div class="form-group col-md-6"> <label class="form-control-label" for="city">Current City</label> <input type="text" placeholder="Current City" class="form-control js_geocomplete" name="city" id="city" value=""> </div>
                            <div class="form-group col-md-6"> <label class="form-control-label" for="hometown">Hometown</label> <input type="text" placeholder="Hometown" class="form-control js_geocomplete" name="hometown" id="hometown" value=""> </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="heading-small mb20">
                        Work
                    </div>
                    <div class="pl-md-4">
                        <div class="form-group"> <label class="form-control-label" for="work_title">Work Title</label> <input type="text" class="form-control" placeholder="Work Title" name="work_title" id="work_title" value=""> </div>
                        <div class="row">
                            <div class="form-group col-md-6"> <label class="form-control-label" for="work_place">Work Place</label> <input type="text" class="form-control" placeholder="Work Place" name="work_place" id="work_place" value=""> </div>
                            <div class="form-group col-md-6"> <label class="form-control-label" for="work_url">Work Website</label> <input type="text" class="form-control" placeholder="Work Website" name="work_url" id="work_url" value=""> </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="heading-small mb20">
                        Education
                    </div>
                    <div class="pl-md-4">
                        <div class="form-group"> <label class="form-control-label" for="edu_major">Major</label> <input type="text" class="form-control" placeholder="Major" name="edu_major" id="edu_major" value=""> </div>
                        <div class="row">
                            <div class="form-group col-md-6"> <label class="form-control-label" for="edu_school">School</label> <input type="text" class="form-control" placeholder="School" name="edu_school" id="edu_school" value=""> </div>
                            <div class="form-group col-md-6"> <label class="form-control-label" for="edu_class">Class</label> <input type="text" class="form-control" placeholder="Class" name="edu_class" id="edu_class" value=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="add-friend">
            <div class="d-flex justify-content-center mt-3">
                <strong style="font-size: 1.5rem;font-weight:600;color:rgb(237, 126, 42);">Add Friends</strong>
            </div>
            <div class="friends d-flex flex-wrap mt-4" style="gap: 20px;justify-content: center;">
             @forelse($friendSuggestions as $suggestion)
                <div class="firend card">
                    <div class="card-body m-2 d-flex flex-column align-items-center">
                        <img width="100" height="100" style="border-radius: 50%;" src="{{asset($suggestion->image)}}" alt="{{$suggestion->name}}">
                        <strong class="friend-name m-2" style="font-size: 1rem;font-weight:600;color:rgb(242, 137, 56);">{{$suggestion->name}}</strong>
                        <span id="button_{{$suggestion->id}}"><button type="button" class="btn btn-sm btn-success js_friend-add"  data-uid="{{$suggestion->id}}" onclick="friendRequest({{$suggestion->id}})"> <i class="fa fa-user-plus mr-2"></i>Add Friend </button></span>
                    </div>
                </div>
            @empty
                No found
            @endforelse
            </div>
        </div>

    </div>
    <div class="card-footer d-flex justify-content-end" style="gap: 15px;">
        <button id="second-prev-btn" class="btn btn-secondary d-none">Previous</button>
        <button id="first-next-btn" class="btn btn-primary btn-next-step">Next Step <i class="fas fa-arrow-circle-right ml-2"></i></button>
        <button id="second-next-btn" class="btn btn-primary d-none btn-next-step">Next Step <i class="fas fa-arrow-circle-right ml-2"></i></button>
        <button id="third-prev-btn" class="btn btn-secondary d-none">Previous</button>
        <button id="last-finish-btn" class="btn btn-success d-none">Finish</button>
    </div>
</div>

<div class="model modal d-none" id="model">
    <div class="model-inner">
        <div class="image-div">
            <img src="#" alt="User choosed image" id="model-image">
        </div>
        <div class="model-btn mt-4 d-flex">
            <button id="crop-btn" class="btn btn-primary">Crop</button>
            <button id="cancel-btn" class="btn btn-primary ml-5">Cancel</button>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{asset("js/cropper/cropper.min.js")}}"></script>
<script>
    function getRoundedCanvas(sourceCanvas) {
        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        var width = sourceCanvas.width;
        var height = sourceCanvas.height;
        canvas.width = width;
        canvas.height = height;
        context.imageSmoothingEnabled = true;
        context.fillStyle = "#fff"
        context.drawImage(sourceCanvas, 0, 0, width, height);
        context.globalCompositeOperation = 'destination-in';
        context.beginPath();
        context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
        context.fill();
        var imgData = context.getImageData(0, 0, canvas.width, canvas.height);
        var data = imgData.data;
        for (var i = 0; i < data.length; i += 4) {
            if (data[i + 3] < 255) {
                data[i] = 255;
                data[i + 1] = 255;
                data[i + 2] = 255;
                data[i + 3] = 255;
            }
        }
        context.putImageData(imgData, 0, 0);
        return canvas;
    }

    const originalUserImageSrc = document.getElementById("result-image").src;

    const image = document.getElementById("image");
    var croppable = false;
    var cropper;
    image.addEventListener("change", e => {
        const [file] = image.files;
        if (file) {
            document.getElementById("model-image").src = URL.createObjectURL(file);
            document.getElementById("model").classList.remove("d-none");
            cropper = new Cropper(document.getElementById("model-image"), {
                viewMode: 1
                , dragMode: 'move'
                , aspectRatio: 1
                , ready: function() {
                    croppable = true;
                }
            });
        } else {
            document.getElementById("result-image").src = originalUserImageSrc;
            document.getElementById("server-result-image").value = null;
        }
    });

    const button = document.getElementById("crop-btn");
    var mainCanvas;
    button.onclick = function() {
        var croppedCanvas;
        var roundedCanvas;
        var roundedImage;
        if (!croppable) {
            return;
        }
        croppedCanvas = cropper.getCroppedCanvas({
            imageSmoothingEnabled: true
            , fillStyle: '#fff'
        , });
        roundedCanvas = getRoundedCanvas(croppedCanvas);
        mainCanvas = roundedCanvas;
        document.getElementById("result-image").src = roundedCanvas.toDataURL('image/jpeg', 1);
        document.getElementById("server-result-image").value = roundedCanvas.toDataURL('image/jpeg', 1);
        croppable = false;
        cropper.destroy();
        cropper = null;
        document.getElementById("model").classList.add("d-none");
    };

    document.getElementById("cancel-btn").addEventListener("click", e => {
        croppable = false;
        cropper.destroy();
        cropper = null;
        image.value = null;
        document.getElementById("result-image").src = originalUserImageSrc;
        document.getElementById("server-result-image").value = null;
        document.getElementById("model").classList.add("d-none");

    });


    /* Tab navigation */
    var currentTab = 1;
    document.getElementById("first-next-btn").addEventListener("click", e => {
        document.getElementById("second-prev-btn").classList.remove("d-none");
        document.getElementById("second-next-btn").classList.remove("d-none");
        document.getElementById("first-next-btn").classList.add("d-none");
        document.getElementById("profile-pic-div").style.transform = "translateX(-110%)";
        document.getElementById("profile-pic-div").style.position = "absolute";
        document.getElementById("gerenal-info").style.transform = "translateX(0)";
        document.getElementById("gerenal-info").style.position = "unset";
        document.getElementById("btn-tab-1").classList.remove("active");
        document.getElementById("btn-tab-2").classList.add("active");
        currentTab = 2;
    });

    document.getElementById("second-prev-btn").addEventListener("click", e => {
        document.getElementById("first-next-btn").classList.remove("d-none");
        document.getElementById("second-next-btn").classList.add("d-none");
        document.getElementById("second-prev-btn").classList.add("d-none");
        document.getElementById("gerenal-info").style.transform = "translateX(110%)";
        document.getElementById("gerenal-info").style.position = "absolute";
        document.getElementById("profile-pic-div").style.position = "unset";
        document.getElementById("profile-pic-div").style.transform = "translateX(0)";
        document.getElementById("btn-tab-1").classList.add("active");
        document.getElementById("btn-tab-2").classList.remove("active");
        currentTab = 1;
    });

    document.getElementById("second-next-btn").addEventListener("click", e => {
        document.getElementById("third-prev-btn").classList.remove("d-none");
        document.getElementById("second-prev-btn").classList.add("d-none");
        document.getElementById("gerenal-info").style.transform = "translateX(-110%)";
        document.getElementById("gerenal-info").style.position = "absolute";
        document.getElementById("add-friend").style.transform = "translateX(0)";
        document.getElementById("add-friend").style.position = "unset";
        document.getElementById("last-finish-btn").classList.remove("d-none");
        document.getElementById("second-next-btn").classList.add("d-none");
        document.getElementById("btn-tab-2").classList.remove("active");
        document.getElementById("btn-tab-3").classList.add("active");
        currentTab = 3;

    });

    document.getElementById("third-prev-btn").addEventListener("click", e => {
        document.getElementById("last-finish-btn").classList.add("d-none");
        document.getElementById("second-next-btn").classList.remove("d-none");
        document.getElementById("third-prev-btn").classList.add("d-none");
        document.getElementById("second-prev-btn").classList.remove("d-none");
        document.getElementById("add-friend").style.transform = "translateX(110%)";
        document.getElementById("add-friend").style.position = "absolute";
        document.getElementById("gerenal-info").style.transform = "translateX(0)";
        document.getElementById("gerenal-info").style.position = "unset";
        document.getElementById("btn-tab-3").classList.remove("active");
        document.getElementById("btn-tab-2").classList.add("active");
        currentTab = 2;
    });

    document.getElementById("btn-tab-1").addEventListener("click", e => {
        if (currentTab === 1) {
            return;
        }
        if (currentTab === 2) {
            document.getElementById("second-prev-btn").dispatchEvent(new Event('click'));
        }
        if (currentTab === 3) {
            document.getElementById("third-prev-btn").dispatchEvent(new Event('click'));
            setTimeout(() => {
                document.getElementById("second-prev-btn").dispatchEvent(new Event('click'));
            }, 500);
        }
    });
    document.getElementById("btn-tab-2").addEventListener("click", e => {
        if (currentTab === 1) {
            document.getElementById("first-next-btn").dispatchEvent(new Event('click'));
        }
        if (currentTab === 2) {
            return;
        }
        if (currentTab === 3) {
            document.getElementById("third-prev-btn").dispatchEvent(new Event('click'));
        }
    });
    document.getElementById("btn-tab-3").addEventListener("click", e => {
        if (currentTab === 1) {
            document.getElementById("first-next-btn").dispatchEvent(new Event('click'));
            setTimeout(() => {
                document.getElementById("second-next-btn").dispatchEvent(new Event('click'));
            }, 500);
        }
        if (currentTab === 2) {
            document.getElementById("second-next-btn").dispatchEvent(new Event('click'));
        }
        if (currentTab === 3) {
            return;
        }
    });


   

</script>
@endpush
