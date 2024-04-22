@extends('layouts.front')

@section('seca')
<div class="enrollment-con">
    <h4>Please fill up the form below. As much as possible, don't leave empty answer.</h4>
</div>

<!-- for the success message from the controller when a new event is added -->
@if (session('status'))
<div class="c_ev_status">{{session('status')}}</div>
@endif

<div class="enrollment-sec">
    <form method="post" action="{{ url('enrollment') }}">
        @csrf
        <!-- @method('post') -->

        <div class="enrollment-form">
            <!-- one -->

            <div class="enrollment-head">
                <h1>Enrollment Form</h1>
            </div>


            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">School Year</label>
                        <input type="text" name="school_year" id="" value="{{ old('school_year') }}" placeholder="ex. 2023 - 2024">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Grade Level to Enroll</label>
                        <input type="text" name="grade_to_enroll" id="" value="{{ old('grade_to_enroll') }}" placeholder="ex. 12">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">With LRN?</label>
                        <input type="text" name="with_lrn" id="" value="{{ old('with_lrn') }}" placeholder=" YES OR NO">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Returning (Balik-Aral)</label>
                        <input type="text" name="balik_aral" id="" value="{{ old('balik_aral') }}" placeholder="YES OR NO">
                    </div>
                </div>
            </div>

            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">TRACK</label>
                        <input type="text" name="track" id="" value="{{ old('track') }}" placeholder="ex. TVL">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">STRAND</label>
                        <input type="text" name="strand" id="" value="{{ old('strand') }}" placeholder="ex. ICT">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">SPECIALIZATION</label>
                        <input type="text" name="specialization" id="" value="{{ old('specialization') }}" placeholder=" ex. Tech-Draft">
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Learner Information</h1>
            </div>

            <div class="enroll-form-two">
                <div class="en-form-boxt">
                    <div class="en-fo-two-item">
                        <label for="">PSA Birth Certificate No. (If Available upon registration)</label>
                        <input type="text" name="psa_no" id="" value="{{ old('psa_no') }}" placeholder="N/A">
                    </div>
                    <div class="en-fo-two-item">
                        <label for="">Learner Reference No. (LRN)</label>
                        <input type="text" name="lrn" id="" value="{{ old('lrn') }}" placeholder="ex. 000000000000">
                    </div>
                </div>

                <div class="en-form-boxt-two">
                    <div class="en-form-box-list-f">
                        <label for="">Name: Last Name, First Name, Middle Name, Extension Name e.g Jr, III (If applicable)</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" placeholder="ex. Doe, Jane Guerzon">
                    </div>
                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Birthdate (mm/dd/yyyy)</label>
                            <input type="date" name="birthdate" id="" value="{{ old('birthdate') }}" placeholder="ex. 12/08/2000">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Age</label>
                            <input type="number" name="age" id="" value="{{ old('age') }}" placeholder="ex. 16">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Sex</label>
                            <input type="text" name="sex" id="" value="{{ old('sex') }}" placeholder="Female or Male">
                        </div>
                    </div>

                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Place of Birth</label>
                            <input type="text" name="birth_place" id="" value="{{ old('birth_place') }}" placeholder="ex. City/Municipality, Province">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Mother Tongue</label>
                            <input type="text" name="mother_tongue" id="" value="{{ old('mother_tongue') }}" placeholder="ex. Filipino">
                        </div>
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Current Address</h1>
            </div>

            <div class="en-form-con-three">
                <div class="en-form-box-three">
                    <div class="en-form-three-list">
                        <label for="">House No./Street</label>
                        <input type="text" name="house_no" id="" value="{{ old('house_no') }}" placeholder="ex. 1111">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Street Name</label>
                        <input type="text" name="street" id="" value="{{ old('street') }}" placeholder="ex. Purok 0">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Barangay</label>
                        <input type="text" name="brngy" id="" value="{{ old('brngy') }}" placeholder="ex. Butao">
                    </div>
                </div>
                <div class="en-form-box-three">
                    <div class="en-form-three-list">
                        <label for="">Municipality/City</label>
                        <input type="text" name="mun_city" id="" value="{{ old('mun_city') }}" placeholder="ex. Cuyapo">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Province</label>
                        <input type="text" name="province" id="" value="{{ old('province') }}" placeholder="ex. Nueva Ecija">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Country</label>
                        <input type="text" name="country" id="" value="{{ old('country') }}" placeholder="ex. Philippines">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Zip Code</label>
                        <input type="text" name="zip_code" id="" value="{{ old('zip_code') }}" placeholder="ex. 3117">
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Parent's/Guardian Information</h1>
            </div>

            <div class="en-form-box-four">
                <div class="enrollment-sub">
                    <h5>Father</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="f_lastname" id="" value="{{ old('f_lastname') }}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="f_firstname" id="" value="{{ old('f_firstname') }}" placeholder="ex. Jose">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="f_midname" id="" value="{{ old('f_midname') }}" placeholder="ex. Garcia">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="f_contact_no" id="" value="{{ old('f_contact_no') }}" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Mother</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="m_lastname" id="" value="{{ old('m_lastname') }}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="m_firstname" id="" value="{{ old('m_firstname') }}" placeholder="ex. Jane">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="m_midname" id="" value="{{ old('m_midname') }}" placeholder="ex. Lopez">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="m_contact_no" id="" value="{{ old('m_contact_no') }}" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Guardian</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="g_lastname" id="" value="{{ old('g_lastname') }}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="g_firstname" id="" value="{{ old('g_firstname') }}" placeholder="ex. Job">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="g_midname" id="" value="{{ old('g_midname') }}" placeholder="ex. Delo">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="g_contact_no" id="" value="{{ old('g_') }}" placeholder="ex. 09*********">
                    </div>
                </div>
            </div>
            <div class="enroll-form-submit">
                <input type="submit" value="Submit" class="enroll-form-btn">
            </div>

        </div>

        <!-- <label for=""></label>
        <input type="text" name="" id="" value="" placeholder="ex. 000000000000"> -->


        <!-- two -->
    </form>

</div>

@endsection