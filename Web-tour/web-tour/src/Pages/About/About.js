import "../../Components/Main.scss";
import "./About.scss";
import Navbar from "../../Components/Navbar/Navbar";
import AboutHero from "../../assets/About.jpg";
import Footer from "../../Components/Footer/Footer";
import AboutIntro from "../../assets/AboutIntro.jpg";
import member1 from "../../assets/member1.jpg";
import member2 from "../../assets/member2.jpg";
import member3 from "../../assets/member3.jpg";
import "bootstrap/dist/css/bootstrap.min.css";

function About() {
  return (
    <div className="about">
      <Navbar />

      <div className="about__hero">
        <div className="about__hero-img">
          <img src={AboutHero} alt="AboutHero" />
        </div>

        <div className="about__hero-text">
          <h1>GIỚI THIỆU</h1>
        </div>
      </div>

      <div className="about__intro">
        <div className="about__intro-content">
          <div className="about__intro-content_img">
            <img alt="aboutIntro" src={AboutIntro} />
          </div>
          <div className="about__intro-content_text">
            <h1>Một cách tốt hơn để đi du lịch và tham quan Đà Lạt</h1>
            <div className="about__intro-content_text-wrap">
              <div className="divider-container">
                <span></span>
              </div>

              <div className="about__intro-content_text-description">
                <p className="about__intro-content_text-description_paragraphMain">
                  TravelDalat là một cổng thông tin đặt phòng du lịch Đà Lạt,
                  nơi bạn có thể dễ dàng đặt các tour du lịch trong ngày, khởi
                  hành nhóm cố định, ngày lễ và các gói kỳ nghỉ tại thành phố Đà Lạt.
                </p>
                <p className="about__intro-content_text-description_paragraphDes">
                  Ngày nay, việc đặt đúng tour du lịch hoặc gói kỳ nghỉ đã trở
                  thành một quá trình tốn thời gian và đau đớn. Nhà điều hành
                  tour du lịch nào đủ điều kiện? Giá tour phù hợp là bao nhiêu?
                  Khi bạn trả tiền đặt cọc trước cho một công ty lữ hành không
                  xác định, tiền của bạn có an toàn không? Là những đánh giá
                  Nhìn thấy trên một trang web của các nhà khai thác địa phương
                  chính hãng?
                </p>
              </div>
            </div>
            <div className="wrap-button">
              <a href="/" className="btnLink">
                <span className="btnPrimary button-text">Contact Us</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div className="about__process d-flex flex-column align-items-center">
        <div className="about__process-title">
          <h1>Quy trình đặt tour thuận tiện và dễ dàng</h1>
        </div>
        <div className="divider-container">
          <span></span>
        </div>
        <div className="about__process-content">
          <div className="about__process-content_row">
            <div className="row">
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Tiện lợi và nhanh chóng</h3>
                </div>
              </div>
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Dễ dàng lựa chọn tour</h3>
                </div>
              </div>
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Hỗ trợ và tư vấn trực tuyến</h3>
                </div>
              </div>
            </div>
          </div>
          <div className="about__process-content_row">
            <div className="row">
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Tiết kiệm thời gian và chi phí</h3>
                </div>
              </div>
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Thanh toán đơn giản và an toàn</h3>
                </div>
              </div>
              <div className="col-md-4">
                <div className="about__process-content_heading d-flex align-items-center">
                  <i class="fa-solid fa-check"></i>
                  <h3>Thông tin đầy đủ và chi tiết</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="about__staff">
        <h1>Nhân Viên Của Chúng Tôi</h1>
        <div className="divider-container">
          <span></span>
        </div>

        <div className="about__staff-card">
          <div className="about__staff-card_content">
            <img src={member1} alt="ourStaff"></img>
            <div className="about__staff-card_content-heading">
              <div className="team-name">
                <span>Lê Tân</span>
              </div>
              <div className="team-job">
                <span>CEO, Founder</span>
              </div>
            </div>
          </div>
          <div className="about__staff-card_content">
            <img src={member2} alt="ourStaff"></img>
            <div className="about__staff-card_content-heading">
              <div className="team-name">
                <span>Trần Thị Ngọc Ánh</span>
              </div>
              <div className="team-job">
                <span>CEO, Founder</span>
              </div>
            </div>
          </div>
          <div className="about__staff-card_content">
            <img src={member3} alt="ourStaff"></img>
            <div className="about__staff-card_content-heading">
              <div className="team-name">
                <span>Đoàn Cao Nhật Hạ</span>
              </div>
              <div className="team-job">
                <span>CEO, Founder</span>
              </div>
            </div>
          </div>
        </div>
      </div>



      <Footer />
    </div>
  );
}
export default About;
