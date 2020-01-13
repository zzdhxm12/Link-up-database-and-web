# Link up database and web
Create my own web



## Prerequisites
* MySQL

* Bitnami


## Architecture

### 1. 전체 구조도

![image](https://user-images.githubusercontent.com/53864655/71870045-bc57ae00-3157-11ea-8fef-bf2d454ce8fd.png)



### 2. Database 설계

테이블 명 : macaron, member, comment, board
* macaron 

![image](https://user-images.githubusercontent.com/53864655/71870126-19ebfa80-3158-11ea-9669-dc53a7e52c7c.png)

* member

![image](https://user-images.githubusercontent.com/53864655/71870141-2a9c7080-3158-11ea-829f-c3145420524f.png)

* comment

![image](https://user-images.githubusercontent.com/53864655/71870162-456ee500-3158-11ea-96fc-aac92b619b78.png)

* board

![image](https://user-images.githubusercontent.com/53864655/71870185-5586c480-3158-11ea-987d-806a058f61cf.png)



### 3. Flowchart

![image](https://user-images.githubusercontent.com/53864655/71870213-70593900-3158-11ea-95dc-be3cacfd33ea.png)

## UI Design

### 1. 홈

![image](https://user-images.githubusercontent.com/53864655/72234410-46988a00-3610-11ea-8893-4aec281dac52.png)

* 웹페이지 상단에 홈페이지 이름, 홈/게시판/마카롱 가게 정보 등의 탭이 있고 로그인/회원가입 아이콘, 검색 창이 존재

### 2. 월/주간 순위

![image](https://user-images.githubusercontent.com/53864655/72234417-4f895b80-3610-11ea-8d6c-1e97d3187790.png)

* 월별/지역별 마카롱 가게 맛집 순위 table이 존재

### 3. 마카롱 가게 정보

![image](https://user-images.githubusercontent.com/53864655/72234423-57490000-3610-11ea-8954-af0c48de3bf1.png)

* 마카롱 가게 정보 탭에는 지역별 마카롱 가게들의 OPEN 요일, OPEN/CLOSE 시간, 판매 마카롱 종류 등의 정보 표기

### 4. 게시판

![image](https://user-images.githubusercontent.com/53864655/72234427-60d26800-3610-11ea-8e36-a3f98d1072be.png)

* 게시판에서 회원 후기 작성 가능

### 4-1. 게시글

![image](https://user-images.githubusercontent.com/53864655/72234434-64fe8580-3610-11ea-9ef5-fdaa40c131a4.png)

### 4-2. 게시글 작성

![image](https://user-images.githubusercontent.com/53864655/72234444-6cbe2a00-3610-11ea-8bcb-ea22eef70357.png)

### 5. 로그인

![image](https://user-images.githubusercontent.com/53864655/72234449-70ea4780-3610-11ea-89c7-296d9d6b0adf.png)

* 로그인, 회원가입은 기존 다른 웹 페이지와 동일한 기능 적용

### 6. 회원가입

![image](https://user-images.githubusercontent.com/53864655/72234451-72b40b00-3610-11ea-8c7a-e2b232fb2b1b.png)

* 회원가입을 하면 일반회원으로 등급이 분류되는데, 등급에는 일반회원, 가게주인, 관리자가 존재
* 일반회원은 마카롱 가게 순위를 매기는데 투표와 게시판 후기글 작성이 가능 
* 가게주인은 마카롱 가게 등록 및 가게 정보 입력이 가능
* 관리자는 모든 DB관리, 게시판 관리가 가능


## Sequnce Diagram

### 1. 마카롱 가게 정보 제공

![image](https://user-images.githubusercontent.com/53864655/71870233-8c5cda80-3158-11ea-86f2-bee47f18caee.png)

### 2. 게시판 입력

![image](https://user-images.githubusercontent.com/53864655/71870257-a3033180-3158-11ea-8ae3-a719fa014138.png)

### 3. 로그인

![image](https://user-images.githubusercontent.com/53864655/71870269-b2827a80-3158-11ea-8e2d-81171625dadd.png)

### 4. 회원가입

![image](https://user-images.githubusercontent.com/53864655/71870274-b9a98880-3158-11ea-90f2-551bd85364f6.png)

## Usecase

### 1.마카롱 가게 정보 제공

![image](https://user-images.githubusercontent.com/53864655/72234394-2a94e880-3610-11ea-8a46-209f700611f7.png)

### 2. 게시판 입력

![image](https://user-images.githubusercontent.com/53864655/71870323-de056500-3158-11ea-828f-5923c551033d.png)

### 3.로그인

![image](https://user-images.githubusercontent.com/53864655/71870337-eb225400-3158-11ea-99ea-85f104ae9fe9.png)

### 4.회원가입

![image](https://user-images.githubusercontent.com/53864655/71870349-f1b0cb80-3158-11ea-8fd4-78d0fff8f314.png)
