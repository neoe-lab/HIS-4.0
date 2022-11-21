  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>เมนูหลัก</span>
                </li>
                <li class="{{ Request::path() == '/' ? 'active' : ''}}">
                    <a href="{{ route('home-page') }}"><i class="la la-home"></i><span>HOME</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-area-chart"></i> <span>ข้อมูลและสถิติ</span><span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li>
                            <a class="{{ Request::path() == 'opd' ? 'active' : ''}}" href="{{ route('opd-page') }}">ผู้รับบริการ</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'ipd' ? 'active' : ''}}" href="{{ route('ipd-page') }}">ผู้ป่วยใน</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'dent' ? 'active' : ''}}" href="{{ route('dent-page') }}">ทัยตกรรม</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'ppt' ? 'active' : ''}}" href="{{ route('ppt-page') }}">แพทย์แผนไทย</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'er' ? 'active' : ''}}" href="{{ route('er-page') }}">อุบัติเหตุและฉุกเฉิน</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'cd' ? 'active' : ''}}" href="{{ route('cd-page') }}">โรคติดต่อ CD</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'ncd' ? 'active' : ''}}" href="{{ route('ncd-page') }}">โรคไม่ติดต่อ NCD</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'pts' ? 'active' : ''}}" href="{{ route('pts-page') }}">กายภาพบำบัด</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'xray' ? 'active' : ''}}" href="{{ route('xray-page') }}">รังสิวินิจฉัย X-ray</a>
                        </li>
                        <li>
                            <a class="{{ Request::path() == 'lab' ? 'active' : ''}}" href="{{ route('lab-page') }}">ชันสูตรสาธารณสุข</a>
                        </li>


                    </ul>
                </li>
                <li class="menu-title">
                    <span>INFO</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-book"></i> <span>คู่มือการใช้งาน</span><span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li>
                            <a href="#">รวม Template</a>
                        </li>
                        <li>
                            <a href="#">Last Update</a>
                        </li>



                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

    <!-- /Sidebar -->

 