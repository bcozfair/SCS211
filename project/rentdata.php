<div class="d-flex align-items-center justify-content-center">
    <div style="
            margin-top: 8px;
            border-radius: 20px;
            background-color: #222222;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          ">
        <form class="row p-4" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold" id="bookingForm">
            <h2 class="text-center" style="color: #ffbf00">รายละเอียดการจอง</h2>
            <div class="row g-2 m-1">
                <div class="col-lg-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" required>
                            <option selected>เข้ารับที่สาขา</option>
                            <option value="10100">เขตป้อมปราบศัตรูพ่าย</option>
                            <option value="10100">เขตสัมพันธวงศ์</option>
                            <option value="10110">
                                เขตปทุมวัน เฉพาะอาคารเพลินจิตเซ็นเตอร์
                            </option>
                            <option value="10110">เขตวัฒนา</option>
                            <option value="10120">เขตบางคอแหลม</option>
                            <option value="10120">
                                เขตปทุมวัน เฉพาะอาคารลุมพินีทาวเวอร์
                            </option>
                            <option value="10120">เขตยานนาวา</option>
                            <option value="10120">เขตสาทร</option>
                            <option value="10140">เขตทุ่งครุ</option>
                            <option value="10140">เขตราษฎร์บูรณะ</option>
                            <option value="10150">เขตจอมทอง</option>
                            <option value="10150">เขตบางขุนเทียน</option>
                            <option value="10150">เขตบางบอน</option>
                            <option value="10160">เขตบางแค</option>
                            <option value="10160">เขตภาษีเจริญ</option>
                            <option value="10160">เขตหนองแขม</option>
                            <option value="10170">เขตตลิ่งชัน</option>
                            <option value="10170">เขตทวีวัฒนา</option>
                            <option value="10200">เขตพระนคร</option>
                            <option value="10210">เขตดอนเมือง</option>
                            <option value="10210">เขตหลักสี่</option>
                            <option value="10220">เขตสายไหม</option>
                            <option value="10220">เขตบางเขน</option>
                            <option value="10230">
                                เขตบางเขน เฉพาะแขวงท่าแร้ง หมู่ 8-10
                            </option>
                            <option value="10230">เขตคันนายาว</option>
                            <option value="10230">เขตบึงกุ่ม</option>
                            <option value="10240">
                                เขตบึงกุ่ม เฉพาะแขวงคลองกุ่ม หมู่ 1-6, 13
                            </option>
                            <option value="10240">เขตบางกะปิ</option>
                            <option value="10240">
                                เขตสะพานสูง เฉพาะแขวงสะพานสูง หมู่ 1-11
                            </option>
                            <option value="10250">
                                เขตสะพานสูง เฉพาะแขวงสะพานสูง หมู่ 12-17
                            </option>
                            <option value="10250">เขตบางกะปิ เฉพาะหมู่บ้านเสรี</option>
                            <option value="10250">เขตประเวศ</option>
                            <option value="10250">เขตสวนหลวง</option>
                            <option value="10260">เขตบางนา</option>
                            <option value="10260">เขตพระโขนง</option>
                            <option value="10300">เขตดุสิต</option>
                            <option value="10303">
                                เขตดุสิต เฉพาะภายในพระราชวังดุสิต
                            </option>
                            <option value="10310">เขตวังทองหลาง</option>
                            <option value="10310">เขตห้วยขวาง</option>
                            <option value="10330">เขตปทุมวัน</option>
                            <option value="10400">เขตดินแดง</option>
                            <option value="10400">เขตพญาไท</option>
                            <option value="10400">เขตราชเทวี</option>
                            <option value="10400">
                                เขตปทุมวัน (เฉพาะ ชอาคารวิทยุคอมเพล็กซ์, บ้านปทุมวัน,
                                ปทุมวันรีสอร์ท และธนาคารไทยพาณิชย์ สาขาชิดลม)
                            </option>
                            <option value="10500">
                                เขตปทุมวัน (เฉพาะศาลแขวงปทุมวัน)
                            </option>
                            <option value="10500">เขตบางรัก</option>
                            <option value="10510">เขตคลองสามวา</option>
                            <option value="10510">เขตมีนบุรี</option>
                            <option value="10520">เขตลาดกระบัง</option>
                            <option value="10530">เขตหนองจอก</option>
                            <option value="10600">เขตคลองสาน</option>
                            <option value="10600">เขตธนบุรี</option>
                            <option value="10600">เขตบางกอกใหญ่</option>
                            <option value="10700">เขตบางกอกน้อย</option>
                            <option value="10700">เขตบางพลัด</option>
                            <option value="10800">เขตบางซื่อ</option>
                            <option value="10900">เขตจตุจักร</option>
                            <option value="10110">เขตคลองเตย</option>
                        </select>
                        <label for="floatingSelectGrid">จุดรับรถ</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" required>
                            <option selected>ส่งคืนที่สาขา</option>
                            <option value="10100">เขตป้อมปราบศัตรูพ่าย</option>
                            <option value="10100">เขตสัมพันธวงศ์</option>
                            <option value="10110">
                                เขตปทุมวัน เฉพาะอาคารเพลินจิตเซ็นเตอร์
                            </option>
                            <option value="10110">เขตวัฒนา</option>
                            <option value="10120">เขตบางคอแหลม</option>
                            <option value="10120">
                                เขตปทุมวัน เฉพาะอาคารลุมพินีทาวเวอร์
                            </option>
                            <option value="10120">เขตยานนาวา</option>
                            <option value="10120">เขตสาทร</option>
                            <option value="10140">เขตทุ่งครุ</option>
                            <option value="10140">เขตราษฎร์บูรณะ</option>
                            <option value="10150">เขตจอมทอง</option>
                            <option value="10150">เขตบางขุนเทียน</option>
                            <option value="10150">เขตบางบอน</option>
                            <option value="10160">เขตบางแค</option>
                            <option value="10160">เขตภาษีเจริญ</option>
                            <option value="10160">เขตหนองแขม</option>
                            <option value="10170">เขตตลิ่งชัน</option>
                            <option value="10170">เขตทวีวัฒนา</option>
                            <option value="10200">เขตพระนคร</option>
                            <option value="10210">เขตดอนเมือง</option>
                            <option value="10210">เขตหลักสี่</option>
                            <option value="10220">เขตสายไหม</option>
                            <option value="10220">เขตบางเขน</option>
                            <option value="10230">
                                เขตบางเขน เฉพาะแขวงท่าแร้ง หมู่ 8-10
                            </option>
                            <option value="10230">เขตคันนายาว</option>
                            <option value="10230">เขตบึงกุ่ม</option>
                            <option value="10240">
                                เขตบึงกุ่ม เฉพาะแขวงคลองกุ่ม หมู่ 1-6, 13
                            </option>
                            <option value="10240">เขตบางกะปิ</option>
                            <option value="10240">
                                เขตสะพานสูง เฉพาะแขวงสะพานสูง หมู่ 1-11
                            </option>
                            <option value="10250">
                                เขตสะพานสูง เฉพาะแขวงสะพานสูง หมู่ 12-17
                            </option>
                            <option value="10250">เขตบางกะปิ เฉพาะหมู่บ้านเสรี</option>
                            <option value="10250">เขตประเวศ</option>
                            <option value="10250">เขตสวนหลวง</option>
                            <option value="10260">เขตบางนา</option>
                            <option value="10260">เขตพระโขนง</option>
                            <option value="10300">เขตดุสิต</option>
                            <option value="10303">
                                เขตดุสิต เฉพาะภายในพระราชวังดุสิต
                            </option>
                            <option value="10310">เขตวังทองหลาง</option>
                            <option value="10310">เขตห้วยขวาง</option>
                            <option value="10330">เขตปทุมวัน</option>
                            <option value="10400">เขตดินแดง</option>
                            <option value="10400">เขตพญาไท</option>
                            <option value="10400">เขตราชเทวี</option>
                            <option value="10400">
                                เขตปทุมวัน (เฉพาะ ชอาคารวิทยุคอมเพล็กซ์, บ้านปทุมวัน,
                                ปทุมวันรีสอร์ท และธนาคารไทยพาณิชย์ สาขาชิดลม)
                            </option>
                            <option value="10500">
                                เขตปทุมวัน (เฉพาะศาลแขวงปทุมวัน)
                            </option>
                            <option value="10500">เขตบางรัก</option>
                            <option value="10510">เขตคลองสามวา</option>
                            <option value="10510">เขตมีนบุรี</option>
                            <option value="10520">เขตลาดกระบัง</option>
                            <option value="10530">เขตหนองจอก</option>
                            <option value="10600">เขตคลองสาน</option>
                            <option value="10600">เขตธนบุรี</option>
                            <option value="10600">เขตบางกอกใหญ่</option>
                            <option value="10700">เขตบางกอกน้อย</option>
                            <option value="10700">เขตบางพลัด</option>
                            <option value="10800">เขตบางซื่อ</option>
                            <option value="10900">เขตจตุจักร</option>
                            <option value="10110">เขตคลองเตย</option>
                        </select>
                        <label for="floatingSelectGrid">จุดคืนรถ</label>
                    </div>
                </div>
                <div class="col-lg-4 text-white text-center" style="align-self: center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required />
                        <label class="form-check-label" for="inlineRadio1">เช่ารถขับเอง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required />
                        <label class="form-check-label" for="inlineRadio2">เช่ารถพร้อมคนขับ</label>
                    </div>
                </div>
            </div>
            <div class="row g-2 m-1 d-flex align-items-center justify-content-center">
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="datetime-local" class="form-control" id="floatingInputGrid" required />
                        <label for="floatingInputGrid">วัน - เวลา รับรถ</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="datetime-local" class="form-control" id="floatingInputGrid" required />
                        <label for="floatingInputGrid">วัน - เวลา คืนรถ</label>
                    </div>
                </div>

                <div id="promotion" class="col-lg-4 text-end">
                    <button class="btn btn-success" style="
                    font-family: Arial, Helvetica, sans-serif;
                    font-weight: bold;
                    width: 100%;
                    height: 100%;
                  " type="button" onclick="submitForm()">
                        <i class="fas fa-search me-2"></i>
                        ค้นหารถว่าง
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>