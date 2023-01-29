@extends('user_main')
@section('content')

		<main data-scroll-container>
      <div class="wrapper">
        <div class="movie-container">
					<div class="title-box">
						<h1 class="title-text">영화정보</h1>
						<img src="img/main/poster01@1.jpg" >
          </div>
          <div class="info-container">
            <div class="title">영화제목</div>
            <div class="title-info">
              <div class="info">
                장르
                <div class="genre">
                  <span>액션,어드벤쳐,드라마</span>
                  <span>2022-11-09개봉</span>
                  <span>161분</span>
                </div>
              </div>
              <div class="info">감독<span>라이런쿠글러</span></div>
              <div class="info">출연<span>출연자이름</span></div>
              <div class="info">등급<span>12</span></div>
            </div>
            <a href="./ticketing.html"><button class="ticketing-btn">예매하기</button></a>
          </div>
        </div>
        <div>
          <div class="small-title">제목</div>
          <div class="explaination">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore, accusantium modi autem quo quos exercitationem repellendus repellat recusandae voluptatum, harum temporibus obcaecati nihil repudiandae amet. Distinctio voluptate rerum fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore, accusantium modi autem quo quos exercitationem repellendus repellat recusandae voluptatum, harum temporibus obcaecati nihil repudiandae amet. Distinctio voluptate rerum fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore, accusantium modi autem quo quos exercitationem repellendus repellat recusandae voluptatum, harum temporibus obcaecati nihil repudiandae amet. Distinctio voluptate rerum fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore, accusantium modi autem quo quos exercitationem repellendus repellat recusandae voluptatum, harum temporibus obcaecati nihil repudiandae amet. Distinctio voluptate rerum fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tempore, accusantium modi autem quo quos exercitationem repellendus repellat recusandae voluptatum, harum temporibus obcaecati nihil repudiandae amet. Distinctio voluptate rerum fuga.</div>
        </div>
      </div>
		</main>

		@endsection