<section>
    <div class="card">
        <div class="card-header">
            <h3><i class="fa fa-table"></i> จำนวนผู้รับบริการ</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table-info">
                            <th rowspan="2" class="text-center"><b>เดือน-ปี</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยนอก</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยใน</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้รับบริการรวม</b></th>
                        </tr>
                        <tr class="table-info">
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_visit_month as $all)
                        <tr>
                            <td>{{ $all->AY.$all->AM}}</td>
                            <td class="text-center">{{ number_format($all->opdhn,0)}}</td>
                            <td class="text-center">{{ number_format($all->opd,0) }}</td>
                            <td class="text-center">{{ number_format($all->ipdhn,0) }}</td>
                            <td class="text-center">{{ number_format($all->ipd,0) }}</td>
                            <td class="text-center">{{ number_format($all->opdhn + $all->ipdhn,0) }}</td>
                            <td class="text-center">{{ number_format($all->opd + $all->ipd,0) }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        @foreach ($TOTAL_VISIT_IN_YEAR as $all )
                            
                        @endforeach
                        <tr class="table-warning">
                            <td class="text-center"><b>รวม</b></td>
                            <td class="text-center"><b>{{ number_format($all->opdhn,0)}}</b></td>
                            <td class="text-center"><b>{{ number_format($all->opd,0) }}</b></td>
                            <td class="text-center"><b>{{ number_format($all->ipdhn,0) }}</b></td>
                            <td class="text-center"><b>{{ number_format($all->ipd,0) }}</b></td>
                            <td class="text-center"><b>{{ number_format($all->opdhn + $all->ipdhn,0) }}</b></td>
                            <td class="text-center"><b>{{ number_format($all->opd + $all->ipd,0) }}</b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3><i class="fa fa-table"></i> จำนวนผู้รับบริการรายแผนก (มาตรฐาน สปสช.)</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table-info">
                            <th rowspan="2" class="text-center"><b>แผนก</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยนอก</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยใน</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้รับบริการรวม</b></th>
                        </tr>
                        <tr class="table-info">
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> : </td>
                            <td class="text-center">219</td>
                            <td class="text-center">221</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">219</td>
                            <td class="text-center">221</td>
                        </tr>
                        <tr>
                            <td>01 : อายุรกรรม</td>
                            <td class="text-center">8,590</td>
                            <td class="text-center">10,558</td>
                            <td class="text-center">352</td>
                            <td class="text-center">373</td>
                            <td class="text-center">8,942</td>
                            <td class="text-center">10,931</td>
                        </tr>
                        <tr>
                            <td>02 : ศัลยกรรม</td>
                            <td class="text-center">745</td>
                            <td class="text-center">1,584</td>
                            <td class="text-center">27</td>
                            <td class="text-center">27</td>
                            <td class="text-center">772</td>
                            <td class="text-center">1,611</td>
                        </tr>
                        <tr>
                            <td>03 : สูติกรรม</td>
                            <td class="text-center">23</td>
                            <td class="text-center">49</td>
                            <td class="text-center">73</td>
                            <td class="text-center">79</td>
                            <td class="text-center">96</td>
                            <td class="text-center">128</td>
                        </tr>
                        <tr>
                            <td>04 : นรีเวชกรรม</td>
                            <td class="text-center">279</td>
                            <td class="text-center">446</td>
                            <td class="text-center">11</td>
                            <td class="text-center">11</td>
                            <td class="text-center">290</td>
                            <td class="text-center">457</td>
                        </tr>
                        <tr>
                            <td>05 : กุมารเวชกรรม</td>
                            <td class="text-center">806</td>
                            <td class="text-center">1,195</td>
                            <td class="text-center">99</td>
                            <td class="text-center">104</td>
                            <td class="text-center">905</td>
                            <td class="text-center">1,299</td>
                        </tr>
                        <tr>
                            <td>06 : โสต ศอ นาสิก</td>
                            <td class="text-center">23</td>
                            <td class="text-center">23</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">23</td>
                            <td class="text-center">23</td>
                        </tr>
                        <tr>
                            <td>07 : จักษุ</td>
                            <td class="text-center">91</td>
                            <td class="text-center">94</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">91</td>
                            <td class="text-center">94</td>
                        </tr>
                        <tr>
                            <td>08 : ศัลยกรรมกระดูก</td>
                            <td class="text-center">474</td>
                            <td class="text-center">538</td>
                            <td class="text-center">15</td>
                            <td class="text-center">15</td>
                            <td class="text-center">489</td>
                            <td class="text-center">553</td>
                        </tr>
                        <tr>
                            <td>09 : จิตเวช</td>
                            <td class="text-center">121</td>
                            <td class="text-center">130</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">121</td>
                            <td class="text-center">130</td>
                        </tr>
                        <tr>
                            <td>10 : รังสีวิทยา</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                        </tr>
                        <tr>
                            <td>11 : ทันตกรรม</td>
                            <td class="text-center">1,910</td>
                            <td class="text-center">2,594</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">1,910</td>
                            <td class="text-center">2,594</td>
                        </tr>
                        <tr>
                            <td>12 : อื่นๆ</td>
                            <td class="text-center">908</td>
                            <td class="text-center">1,397</td>
                            <td class="text-center">268</td>
                            <td class="text-center">284</td>
                            <td class="text-center">1,176</td>
                            <td class="text-center">1,681</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="warning">
                            <td class="text-center"><b>รวม</b></td>
                            <td class="text-center"><b>13,729</b></td>
                            <td class="text-center"><b>18,829</b></td>
                            <td class="text-center"><b>842</b></td>
                            <td class="text-center"><b>894</b></td>
                            <td class="text-center"><b>14,571</b></td>
                            <td class="text-center"><b>19,723</b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3><i class="fa fa-table"></i> จำนวนผู้รับบริการรายแผนก (HOSxP)</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr class="table-info">
                            <th rowspan="2" class="text-center"><b>แผนก</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยนอก</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้ป่วยใน</b></th>
                            <th colspan="2" class="text-center"><b>จำนวนผู้รับบริการรวม</b></th>
                        </tr>
                        <tr class="table-info">
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                            <th class="text-center"><b>คน</b></th>
                            <th class="text-center"><b>ครั้ง</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> : </td>
                            <td class="text-center">128</td>
                            <td class="text-center">130</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">128</td>
                            <td class="text-center">130</td>
                        </tr>
                        <tr>
                            <td>01 : อายุรกรรม</td>
                            <td class="text-center">8,307</td>
                            <td class="text-center">9,953</td>
                            <td class="text-center">104</td>
                            <td class="text-center">109</td>
                            <td class="text-center">8,411</td>
                            <td class="text-center">10,062</td>
                        </tr>
                        <tr>
                            <td>02 : ศัลยกรรม</td>
                            <td class="text-center">745</td>
                            <td class="text-center">1,584</td>
                            <td class="text-center">27</td>
                            <td class="text-center">27</td>
                            <td class="text-center">772</td>
                            <td class="text-center">1,611</td>
                        </tr>
                        <tr>
                            <td>03 : สูติกรรม</td>
                            <td class="text-center">23</td>
                            <td class="text-center">49</td>
                            <td class="text-center">73</td>
                            <td class="text-center">79</td>
                            <td class="text-center">96</td>
                            <td class="text-center">128</td>
                        </tr>
                        <tr>
                            <td>04 : นรีเวชกรรม</td>
                            <td class="text-center">122</td>
                            <td class="text-center">155</td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">132</td>
                            <td class="text-center">165</td>
                        </tr>
                        <tr>
                            <td>05 : กุมารเวชกรรม</td>
                            <td class="text-center">748</td>
                            <td class="text-center">1,120</td>
                            <td class="text-center">99</td>
                            <td class="text-center">104</td>
                            <td class="text-center">847</td>
                            <td class="text-center">1,224</td>
                        </tr>
                        <tr>
                            <td>06 : โสต ศอ นาสิก</td>
                            <td class="text-center">23</td>
                            <td class="text-center">23</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">23</td>
                            <td class="text-center">23</td>
                        </tr>
                        <tr>
                            <td>07 : จักษุ</td>
                            <td class="text-center">91</td>
                            <td class="text-center">94</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">91</td>
                            <td class="text-center">94</td>
                        </tr>
                        <tr>
                            <td>08 : ศัลยกรรมกระดูก</td>
                            <td class="text-center">474</td>
                            <td class="text-center">538</td>
                            <td class="text-center">15</td>
                            <td class="text-center">15</td>
                            <td class="text-center">489</td>
                            <td class="text-center">553</td>
                        </tr>
                        <tr>
                            <td>09 : จิตเวช</td>
                            <td class="text-center">121</td>
                            <td class="text-center">130</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">121</td>
                            <td class="text-center">130</td>
                        </tr>
                        <tr>
                            <td>10 : รังสีวิทยา</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                        </tr>
                        <tr>
                            <td>11 : ทันตกรรม</td>
                            <td class="text-center">1,910</td>
                            <td class="text-center">2,594</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">1,910</td>
                            <td class="text-center">2,594</td>
                        </tr>
                        <tr>
                            <td>12 : อนามัยมารดา</td>
                            <td class="text-center">146</td>
                            <td class="text-center">262</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">147</td>
                            <td class="text-center">263</td>
                        </tr>
                        <tr>
                            <td>13 : อนามัยเด็กดี</td>
                            <td class="text-center">75</td>
                            <td class="text-center">75</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">75</td>
                            <td class="text-center">75</td>
                        </tr>
                        <tr>
                            <td>14 : วางแผนครอบครัว</td>
                            <td class="text-center">28</td>
                            <td class="text-center">29</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">28</td>
                            <td class="text-center">29</td>
                        </tr>
                        <tr>
                            <td>15 : อื่น ๆ</td>
                            <td class="text-center">26</td>
                            <td class="text-center">29</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">27</td>
                            <td class="text-center">30</td>
                        </tr>
                        <tr>
                            <td>16 : แพทย์แผนไทย</td>
                            <td class="text-center">646</td>
                            <td class="text-center">751</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">646</td>
                            <td class="text-center">751</td>
                        </tr>
                        <tr>
                            <td>17 : กายภาพบำบัด</td>
                            <td class="text-center">152</td>
                            <td class="text-center">474</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">152</td>
                            <td class="text-center">474</td>
                        </tr>
                        <tr>
                            <td>20 : คิวผู้ป่วยนอก1</td>
                            <td class="text-center">340</td>
                            <td class="text-center">371</td>
                            <td class="text-center">191</td>
                            <td class="text-center">192</td>
                            <td class="text-center">531</td>
                            <td class="text-center">563</td>
                        </tr>
                        <tr>
                            <td>21 : คิวผู้ป่วยนอก2</td>
                            <td class="text-center">115</td>
                            <td class="text-center">116</td>
                            <td class="text-center">8</td>
                            <td class="text-center">8</td>
                            <td class="text-center">123</td>
                            <td class="text-center">124</td>
                        </tr>
                        <tr>
                            <td>22 : คิวห้องจ่ายยา1</td>
                            <td class="text-center">15</td>
                            <td class="text-center">15</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">15</td>
                            <td class="text-center">15</td>
                        </tr>
                        <tr>
                            <td>24 : คิวห้องฉุกเฉิน</td>
                            <td class="text-center">84</td>
                            <td class="text-center">107</td>
                            <td class="text-center">266</td>
                            <td class="text-center">282</td>
                            <td class="text-center">350</td>
                            <td class="text-center">389</td>
                        </tr>
                        <tr>
                            <td>25 : คิวผู้ป่วยนอก(นัด)</td>
                            <td class="text-center">97</td>
                            <td class="text-center">103</td>
                            <td class="text-center">62</td>
                            <td class="text-center">64</td>
                            <td class="text-center">159</td>
                            <td class="text-center">167</td>
                        </tr>
                        <tr>
                            <td>27 : คิวเวชกรรมสังคม</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                        </tr>
                        <tr>
                            <td>28 : คิวห้อง LAB</td>
                            <td class="text-center">11</td>
                            <td class="text-center">11</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">11</td>
                            <td class="text-center">11</td>
                        </tr>
                        <tr>
                            <td>29 : คิวสร้างเสริมภูมิคุ้มกันโรค</td>
                            <td class="text-center">91</td>
                            <td class="text-center">91</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">91</td>
                            <td class="text-center">91</td>
                        </tr>
                        <tr>
                            <td>99 : ไม่ทราบแผนก</td>
                            <td class="text-center">22</td>
                            <td class="text-center">25</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">22</td>
                            <td class="text-center">25</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="warning">
                            <td class="text-center"><b>รวม</b></td>
                            <td class="text-center"><b>13,729</b></td>
                            <td class="text-center"><b>18,829</b></td>
                            <td class="text-center"><b>842</b></td>
                            <td class="text-center"><b>894</b></td>
                            <td class="text-center"><b>14,571</b></td>
                            <td class="text-center"><b>19,723</b></td>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3><i class="fa fa-sort-amount-desc"></i> 50 อันดับโรคผู้ป่วยนอก</h3>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr class="table-info">
                            <th class="text-center">ICD10</th>
                            <th class="text-center">Diag</th>
                            <th class="text-center">ชื่อโรค</th>
                            <th class="text-center">ชาย</th>
                            <th class="text-center">หญิง</th>
                            <th class="text-center">รวม(ราย)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center"><a>I10</a></td>
                            <td>Essential (primary) hypertension</td>
                            <td>โรคความดันโลหิตสูง</td>
                            <td class="text-center">938</td>
                            <td class="text-center">1372</td>
                            <td class="text-center"><span class="label label-success">2310</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>E119</a></td>
                            <td>NIDM Without complications</td>
                            <td>เบาหวานชนิดที่ไม่ต้องพึ่งอินสุลิน ที่ไม่มีภาวะแทรกซ้อน</td>
                            <td class="text-center">619</td>
                            <td class="text-center">1223</td>
                            <td class="text-center"><span class="label label-success">1842</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z480</a></td>
                            <td>Attention to surgical dressings and sutures</td>
                            <td>ล้างแผล</td>
                            <td class="text-center">510</td>
                            <td class="text-center">396</td>
                            <td class="text-center"><span class="label label-success">906</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z298</a></td>
                            <td>Other specified prophylactic measures</td>
                            <td></td>
                            <td class="text-center">396</td>
                            <td class="text-center">499</td>
                            <td class="text-center"><span class="label label-success">895</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K029</a></td>
                            <td>Dental caries, unspecified</td>
                            <td>โรคช่องปากและฟัน</td>
                            <td class="text-center">141</td>
                            <td class="text-center">319</td>
                            <td class="text-center"><span class="label label-success">460</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z290</a></td>
                            <td>Isolation</td>
                            <td></td>
                            <td class="text-center">182</td>
                            <td class="text-center">259</td>
                            <td class="text-center"><span class="label label-success">441</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>J00</a></td>
                            <td>Acute nasopharyngitis [common cold]</td>
                            <td>เยื่อบุจมูกและลำคออักเสบ</td>
                            <td class="text-center">164</td>
                            <td class="text-center">214</td>
                            <td class="text-center"><span class="label label-success">378</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K0409</a></td>
                            <td>Unspecified</td>
                            <td></td>
                            <td class="text-center">148</td>
                            <td class="text-center">199</td>
                            <td class="text-center"><span class="label label-success">347</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K30</a></td>
                            <td>Dyspepsia</td>
                            <td>ปวดท้อง</td>
                            <td class="text-center">96</td>
                            <td class="text-center">159</td>
                            <td class="text-center"><span class="label label-success">255</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z242</a></td>
                            <td>Need for immunization against rabies</td>
                            <td>ฉีดวัคซีนป้องกันพิษสุนัข</td>
                            <td class="text-center">106</td>
                            <td class="text-center">142</td>
                            <td class="text-center"><span class="label label-success">248</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>R42</a></td>
                            <td>Dizziness and giddiness</td>
                            <td>อาการมึนงง</td>
                            <td class="text-center">70</td>
                            <td class="text-center">173</td>
                            <td class="text-center"><span class="label label-success">243</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K082</a></td>
                            <td>Atrophy of edentulous alveolar ridge</td>
                            <td>โรคช่องปากและฟัน</td>
                            <td class="text-center">75</td>
                            <td class="text-center">142</td>
                            <td class="text-center"><span class="label label-success">217</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>E785</a></td>
                            <td>Hyperlipidaemia, unspecified</td>
                            <td>ไขมันในเลือดสูง ที่มิได้ระบุรายละเอียด</td>
                            <td class="text-center">60</td>
                            <td class="text-center">145</td>
                            <td class="text-center"><span class="label label-success">205</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>B24</a></td>
                            <td>Unspecified human immunodeficiency virus(HIV) disease</td>
                            <td>โรคภูมิคุ้มกันบกพร่องจากไวรัสที่มิได้ระบุรายละเอียด</td>
                            <td class="text-center">125</td>
                            <td class="text-center">73</td>
                            <td class="text-center"><span class="label label-success">198</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>J459</a></td>
                            <td>Asthma, unspecified</td>
                            <td>โรคหอบหืด</td>
                            <td class="text-center">72</td>
                            <td class="text-center">112</td>
                            <td class="text-center"><span class="label label-success">184</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K051</a></td>
                            <td>Chronic gingivitis</td>
                            <td>โรคช่องปากและฟัน</td>
                            <td class="text-center">61</td>
                            <td class="text-center">120</td>
                            <td class="text-center"><span class="label label-success">181</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z094</a></td>
                            <td>Follow-up examination after treatment of fracture</td>
                            <td>ติดตามตรวจหลังกระดูกหัก</td>
                            <td class="text-center">84</td>
                            <td class="text-center">97</td>
                            <td class="text-center"><span class="label label-success">181</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z017</a></td>
                            <td>Laboratory examination</td>
                            <td>ตรวจทางห้องปฏิบัติการ</td>
                            <td class="text-center">86</td>
                            <td class="text-center">83</td>
                            <td class="text-center"><span class="label label-success">169</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z027</a></td>
                            <td>Issue of medical certificate</td>
                            <td>ขอใบรับรองแพทย์</td>
                            <td class="text-center">82</td>
                            <td class="text-center">64</td>
                            <td class="text-center"><span class="label label-success">146</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U5733</a></td>
                            <td>ลมปลายปัตคาดสัญญาณ 4 หลัง / คอ</td>
                            <td></td>
                            <td class="text-center">33</td>
                            <td class="text-center">108</td>
                            <td class="text-center"><span class="label label-success">141</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z348</a></td>
                            <td>Supervision of other normal pregnacy</td>
                            <td></td>
                            <td class="text-center">0</td>
                            <td class="text-center">139</td>
                            <td class="text-center"><span class="label label-success">139</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z488</a></td>
                            <td>Other specified surgical follow-up care</td>
                            <td>ล้างแผล</td>
                            <td class="text-center">66</td>
                            <td class="text-center">67</td>
                            <td class="text-center"><span class="label label-success">133</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>J449</a></td>
                            <td>Chronic obstructive pulmonary disease, unspecified</td>
                            <td></td>
                            <td class="text-center">93</td>
                            <td class="text-center">38</td>
                            <td class="text-center"><span class="label label-success">131</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M179</a></td>
                            <td>Gonarthrosis, unspecified</td>
                            <td>ข้อเข่าเสื่อม ที่มิได้ระบุรายละเอียด</td>
                            <td class="text-center">27</td>
                            <td class="text-center">104</td>
                            <td class="text-center"><span class="label label-success">131</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U5726</a></td>
                            <td>ลมปลายปัตคาดขา</td>
                            <td></td>
                            <td class="text-center">24</td>
                            <td class="text-center">103</td>
                            <td class="text-center"><span class="label label-success">127</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M4795</a></td>
                            <td>บริเวณกระดูกสันหลังช่วงหลังอและกระดูกสันหลังส่วนเอว</td>
                            <td></td>
                            <td class="text-center">30</td>
                            <td class="text-center">97</td>
                            <td class="text-center"><span class="label label-success">127</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>A099</a></td>
                            <td>Gastroenteritis and colitis of unspecified origin</td>
                            <td></td>
                            <td class="text-center">38</td>
                            <td class="text-center">78</td>
                            <td class="text-center"><span class="label label-success">116</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>J209</a></td>
                            <td>Acute bronchitis, unspecified</td>
                            <td>หลอดลมอักเสบเฉียบพลัน</td>
                            <td class="text-center">48</td>
                            <td class="text-center">61</td>
                            <td class="text-center"><span class="label label-success">109</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z340</a></td>
                            <td>Supervision of normal first pregnacy</td>
                            <td></td>
                            <td class="text-center">0</td>
                            <td class="text-center">97</td>
                            <td class="text-center"><span class="label label-success">97</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K0404</a></td>
                            <td>Chronic, ulcerative</td>
                            <td></td>
                            <td class="text-center">37</td>
                            <td class="text-center">59</td>
                            <td class="text-center"><span class="label label-success">96</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U119</a></td>
                            <td>Need for immunization against COVID-19, unspecified</td>
                            <td>การฉีดวัคซีนป้องกัน COVID-19 ไม่ระบุรายละเอียด</td>
                            <td class="text-center">40</td>
                            <td class="text-center">51</td>
                            <td class="text-center"><span class="label label-success">91</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>R509</a></td>
                            <td>Fever, unspecified</td>
                            <td>ไข้</td>
                            <td class="text-center">39</td>
                            <td class="text-center">47</td>
                            <td class="text-center"><span class="label label-success">86</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z715</a></td>
                            <td>Drug abuse counselling and surveillance</td>
                            <td></td>
                            <td class="text-center">69</td>
                            <td class="text-center">14</td>
                            <td class="text-center"><span class="label label-success">83</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>N390</a></td>
                            <td>Urinary tract infection, site not specified</td>
                            <td>ทางเดินปัสสาวะอักเสบ</td>
                            <td class="text-center">25</td>
                            <td class="text-center">52</td>
                            <td class="text-center"><span class="label label-success">77</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>F29</a></td>
                            <td>Unspecified nonorganic psychosis</td>
                            <td>โรคหลงผิดที่ไม่ได้เกิดจากโรคทางกาย สาเหตุที่มิได้ระบุรายละเอียด</td>
                            <td class="text-center">41</td>
                            <td class="text-center">35</td>
                            <td class="text-center"><span class="label label-success">76</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>I64</a></td>
                            <td>Stroke,not specified as haemorrhage or infarction</td>
                            <td>โรคระบบไหลเวียน</td>
                            <td class="text-center">52</td>
                            <td class="text-center">23</td>
                            <td class="text-center"><span class="label label-success">75</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>N40</a></td>
                            <td>ต่อมลูกหมากโตจากการเพิ่มจำนวนเซล</td>
                            <td>ต่อมลูกหมากอุดตัน</td>
                            <td class="text-center">75</td>
                            <td class="text-center">0</td>
                            <td class="text-center"><span class="label label-success">75</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>I489</a></td>
                            <td>Atrial fibrillation and atrial flutter, unspecified</td>
                            <td></td>
                            <td class="text-center">27</td>
                            <td class="text-center">44</td>
                            <td class="text-center"><span class="label label-success">71</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z392</a></td>
                            <td>Routine postpartum follow-up</td>
                            <td>ติดตามตรวจหลังคลอด</td>
                            <td class="text-center">0</td>
                            <td class="text-center">68</td>
                            <td class="text-center"><span class="label label-success">68</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U7501</a></td>
                            <td>ปวดหลัง</td>
                            <td></td>
                            <td class="text-center">31</td>
                            <td class="text-center">36</td>
                            <td class="text-center"><span class="label label-success">67</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M6269</a></td>
                            <td>มิได้ระบุรายละเอียด</td>
                            <td></td>
                            <td class="text-center">19</td>
                            <td class="text-center">44</td>
                            <td class="text-center"><span class="label label-success">63</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z115</a></td>
                            <td>Special screening examination for other viral diseases</td>
                            <td></td>
                            <td class="text-center">28</td>
                            <td class="text-center">34</td>
                            <td class="text-center"><span class="label label-success">62</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>Z463</a></td>
                            <td>Fitting and adjustment of dental prosthetic device</td>
                            <td>ฟันปลอม</td>
                            <td class="text-center">25</td>
                            <td class="text-center">35</td>
                            <td class="text-center"><span class="label label-success">60</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M511</a></td>
                            <td>Lumbar and other intervertebral disc disorders with radiculopathy</td>
                            <td></td>
                            <td class="text-center">34</td>
                            <td class="text-center">25</td>
                            <td class="text-center"><span class="label label-success">59</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M4792</a></td>
                            <td>บริเวณคอ</td>
                            <td></td>
                            <td class="text-center">31</td>
                            <td class="text-center">28</td>
                            <td class="text-center"><span class="label label-success">59</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>M6268</a></td>
                            <td>อื่นๆ</td>
                            <td></td>
                            <td class="text-center">11</td>
                            <td class="text-center">48</td>
                            <td class="text-center"><span class="label label-success">59</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U5720</a></td>
                            <td>ลมปลายปัตคาดบ่า</td>
                            <td></td>
                            <td class="text-center">12</td>
                            <td class="text-center">46</td>
                            <td class="text-center"><span class="label label-success">58</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>U5732</a></td>
                            <td>ลมปลายปัตคาดสัญญาณ 3 หลัง</td>
                            <td></td>
                            <td class="text-center">14</td>
                            <td class="text-center">43</td>
                            <td class="text-center"><span class="label label-success">57</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>J111</a></td>
                            <td>Influenza with other respiratory manifestations,virus not identified</td>
                            <td>คออักเสบร่วมด้วยไข้หวัด</td>
                            <td class="text-center">31</td>
                            <td class="text-center">26</td>
                            <td class="text-center"><span class="label label-success">57</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a>K041</a></td>
                            <td>Necrosis of pulp</td>
                            <td>โรคช่องปากและฟัน</td>
                            <td class="text-center">20</td>
                            <td class="text-center">37</td>
                            <td class="text-center"><span class="label label-success">57</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>