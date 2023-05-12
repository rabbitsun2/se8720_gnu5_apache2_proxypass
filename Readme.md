### SE8720 - GNUBoard 5.5 Apache 2.4 Proxypass

##### 1. 프로젝트명: SE8720 - GNUBoard 5.5 Apache 2.4 Proxypass
##### 2. 작성자: 정도윤(Doyoon Jung)
##### 3. 작성일자: 2023-05-13 (Sat) (ver 1.0)
##### 3. 이메일: rabbitsun2 at gmail dot com
##### 4. 비고:
##### -> Apache 2.4 Proxypass에서의 실제 적용 후 real ip 인식 문제 개선
##### 
#####
##### * 개선사항
##### <table style="border:1px solid #e2e2e2">
##### <tr><td style="border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;">구분</td><td style="border-bottom:1px solid #e2e2e2">변경 대상</td><td style="border-bottom:1px solid #e2e2e2">비고</td></tr>
##### <tr><td style="border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;">1</td><td style="border-bottom:1px solid #e2e2e2">3_patch</td><td style="border-bottom:1px solid #e2e2e2">Gnuboard 5 설치 경로</td></tr>
##### <tr><td style="border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;">2</td><td style="border-bottom:1px solid #e2e2e2">3_patch/adm</td><td style="border-bottom:1px solid #e2e2e2">관리자 경로</td></tr>
##### <tr><td style="border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;">3</td><td style="border-bottom:1px solid #e2e2e2">3_patch/bbs</td><td style="border-bottom:1px solid #e2e2e2">게시판 핵심</td></tr>
##### <tr><td style="border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;">4</td><td style="border-bottom:1px solid #e2e2e2">3_patch/lib</td><td style="border-bottom:1px solid #e2e2e2">라이브러리</td></tr>
##### </table>
##### 5. 참고자료(Reference)
##### 1. 불당, "proxy를 거쳐올 때, real ip를 찾아내기", http://opencode.co.kr/php_tips/157, Last Modified 2012-04-05 10:33:01, Accessed by 2023-05-13.
##### 2. 관리자1, "[G5] 방문자 실제 사용하는 IP(Real IP) 사용하기", https://www.happyjung.com/lecture/2839?page=7, Last Modified 2020-10-06 19:03:21, Accessed by 2023-05-13.