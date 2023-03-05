<style scoped>
.layout {
  border: 1px solid #d7dde4;
  background: #f5f7f9;
  position: relative;
  border-radius: 4px;
  overflow: hidden;
}
.layout-breadcrumb {
  padding: 10px 15px 0;
}
.layout-content {
  min-height: 500px;
  margin: 15px;
  overflow: hidden;
  background: #fff;
  border-radius: 4px;
}
.layout-content-main {
  padding: 10px;
}
.layout-copy {
  text-align: center;
  padding: 10px 0 20px;
  color: #9ea7b4;
}
.layout-menu-left {
  background: #8391a5;
}
.layout-header {
  height: 60px;
  background: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.layout-logo-left {
  width: 90%;
  height: 30px;
  background: #5b6270;
  border-radius: 3px;
  margin: 15px auto;
}
.layout-hide-text .layout-text {
  /*display: none;*/
}
.ivu-col {
  transition: width 0.2s ease-in-out;
}
.layout-ceiling {
  /*background: #464c5b;*/
  background: #a52a2a;
  padding: 10px 0;
  overflow: hidden;
  height: 50px;
}
.layout-ceiling-main {
  /*        position: absolute;
                left:120px;
                top:5px;*/
  float: right;
  /*position:absolute;*/
  margin-right: 15px;
  /*        height:20px;
                width: 100px;*/
  /*background-color: #8ce6b0;*/
}
.layout-ceiling-main a {
  color: white;
}
/*
        .demo-badge{
            width: 42px;
            height: 42px;
            background: #eee;
            border-radius: 6px;
            display: inline-block;
        }
    */
.rrr {
  position: absolute;
  left: 300px;
  height: 400px;
  width: 1600px;
}
.photo111 {
  position: absolute;
  /*background-color: #2d8cf0;*/
  left: 10px;
  height: 100px;
  width: 100px;
}
.photo222 {
  position: absolute;
  /*background-color: #8ce6b0;*/
  left: 120px;
  height: 100px;
  width: 100px;
}
.activity {
  border-radius: 8px;
  height: 40px;
  width: 465px;
  /*        background-color: #8ce6b0;*/
  margin: 10px;
  border: 1px solid gray;
}
.layout-ceiling-head {
  position: absolute;
  left: 10px;
  top: 15px;
  /*background-color: #8ce6b0;*/
  height: 20px;
  width: 180px;
}
.head1 {
  position: absolute;
  left: 200px;
  top: 7px;
  /*background-color: #2d8cf0;*/
  height: 30px;
  width: 200px;
}
.head2 {
  position: absolute;
  left: 400px;
  top: 20px;
  /* background-color: #722ed1;*/
  height: 20px;
  width: 100px;
}
.student2content {
  /*border: 2px solid #8391a5;*/
  margin: 20px;
  height: 450px;
  width: 600px;
  border-radius: 12px;
}
.t1 {
  position: absolute;
  /*background-color: #adc6ff;*/
  left: 10px;
  top: 10px;
  height: 30px;
  width: 150px;
}
.t2 {
  position: absolute;
  /*background-color:#8ce6b0;*/
  left: 10px;
  top: 50px;
  height: 20px;
  width: 200px;
}
.t22 {
  position: absolute;
  /* background-color:#adc6ff;*/
  left: 2px;
  top: 2px;
  height: 16px;
  width: 50px;
}
.t222 {
  position: absolute;
  /* background-color:#adc6ff;*/
  left: 30px;
  top: 2px;
  height: 16px;
  width: 140px;
}
.t3 {
  position: absolute;
  /*background-color:#8ce6b0;*/
  left: 10px;
  top: 80px;
  height: 20px;
  width: 200px;
}
.t4 {
  position: absolute;
  /* background-color:#8ce6b0;*/
  left: 10px;
  top: 110px;
  height: 20px;
  width: 200px;
}
.t5 {
  position: absolute;
  /* background-color:#8ce6b0;*/
  left: 10px;
  top: 140px;
  height: 20px;
  width: 200px;
}
.t6 {
  position: absolute;
  /*background-color:#8ce6b0;*/
  left: 10px;
  top: 170px;
  height: 20px;
  width: 200px;
}
.t7 {
  position: absolute;
  /* background-color:#8ce6b0;*/
  left: 10px;
  top: 200px;
  height: 20px;
  width: 200px;
}
.t8 {
  position: absolute;
  /*background-color:#adc6ff;*/
  left: 10px;
  top: 230px;
  height: 30px;
  width: 300px;
}
.t9 {
  position: absolute;
  /* background-color:#8ce6b0;*/
  left: 10px;
  top: 270px;
  height: 120px;
  width: 575px;
}
.t10 {
  position: absolute;
  /*background-color:#adc6ff;*/
  left: 220px;
  top: 400px;
  height: 30px;
  width: 170px;
}
.t11 {
  position: absolute;
  /*background-color:#adc6ff;*/
  left: 400px;
  top: 400px;
  height: 30px;
  width: 80px;
}
.t12 {
  position: absolute;
  /*background-color:#adc6ff;*/
  left: 490px;
  top: 400px;
  height: 30px;
  width: 80px;
}
.t13 {
  position: absolute;
  /*background-color:#adc6ff;*/
  left: 490px;
  top: 400px;
  height: 30px;
  width: 80px;
}
.word1 {
  font-weight: 900;
  font-size: 23px;
}
</style>

<template>
  <div class="layout" :class="{ 'layout-hide-text': spanLeft < 5 }">
    <!-- <router-view/>-->
    <div class="layout-ceiling">
      <div class="layout-ceiling-head">
        <p style="font-size: 15px; color: white">学生在线网络文化工作室</p>
      </div>
      <div class="head1">
        <p style="font-size: 25px; color: white">工作量管理系统</p>
      </div>
      <div class="head2">
        <p style="color: white">管理端</p>
      </div>
      <div class="layout-ceiling-main">
        <Badge dot>
          <a href="#">信息</a>
        </Badge>
        |
        <a href="#">安全中心</a>
        |
        <a href="#">退出</a>
      </div>
    </div>

    <Row type="flex">
      <i-col :span="spanLeft" class="layout-menu-left">
        <Menu active-name="1" theme="dark" width="auto" @on-select="navigator">
          <!--                    <div class="layout-logo-left"></div>-->
          <Menu-item name="administration">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">首页</span>
          </Menu-item>
          <Menu-item name="administration3">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">已申报工作量管理</span>
          </Menu-item>
          <!--                    <Menu-item name="3">
                                            <Icon type="ios-xxx" :size=  "iconSize"></Icon>
                                            <span class="layout-text">管理已有工作量</span>
                                        </Menu-item>-->
          <Menu-item name="administration2">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <!--<a class="layout-text"> <router-link to="/homepage">消息与通知</router-link></a>-->
            <a class="layout-text">消息与通知</a>
          </Menu-item>
        </Menu>
      </i-col>
      <i-col :span="spanRight">
        <!--                <div class="layout-header">
                                    <i-button type="text" @click="toggleClick">
                                        <Icon type="navicon" size="32"></Icon>
                                    </i-button>
                                </div>-->
        <!--                <div class="layout-breadcrumb">
                                    <Breadcrumb>
                                        <Breadcrumb-item href="#">首页</Breadcrumb-item>
                                        <Breadcrumb-item href="#">应用中心</Breadcrumb-item>
                                        <Breadcrumb-item>某应用</Breadcrumb-item>
                                    </Breadcrumb>
                                </div>-->
        <div class="layout-content">
          <!--                    <div class="layout-content-main">内容区域</div>-->
          <Row>
            <Col span="11">
              <Card class="student2content">
                <div class="t1">
                  <p class="word1">详细信息</p>
                </div>
                <div class="t2">
                  <!--                                    <div class="t22">
                                                                            <img src="../src/images/dotblue.png" style="width:20px"/>
                                                                        </div>-->
                  <img
                    src="../src/images/dotblue.png"
                    style="width: 16px"
                    class="t22"
                  />
                  <div class="t222">
                    <p>姓名</p>
                    <p>{{ Name }}</p>
                  </div>
                </div>
                <div class="t3">
                  <img
                    src="../src/images/dotyellow.png"
                    style="width: 16px"
                    class="t22"
                  />
                  <div class="t222">
                    <p>学号</p>
                    <p>{{ ID }}</p>
                  </div>
                </div>
                <div class="t4">
                  <img
                    src="../src/images/dotpink.png"
                    style="width: 16px"
                    class="t22"
                  />
                  <div class="t222">
                    <p>活动名称</p>
                    <p>{{ AcName }}</p>
                  </div>
                </div>
                <div class="t5">
                  <img
                    src="../src/images/dotgreen.png"
                    style="width: 16px"
                    class="t22"
                  />
                  <div class="t222">
                    <p>活动时间</p>
                    <p>{{ AcTime }}</p>
                  </div>
                </div>
                <div class="t6">
                  <img
                    src="../src/images/dotred.png"
                    style="width: 16px"
                    class="t22"
                  />
                  <div class="t222">
                    <p>工作量</p>
                    <p>{{ Workload }}</p>
                  </div>
                </div>
                <!--                                <div class="t7">
                                                                    <img src="../src/images/dotorange.png" style="width:16px" class="t22"/>
                                                                    <div class="t222">
                                                                        <p >工资</p>
                                                                    </div>
                                                                </div>-->
                <div class="t8">
                  <p style="font-size: 23px; font-weight: 900">工资意见</p>
                </div>
                <!--<div class="t9"></div>-->
                <Input
                  v-model="value6"
                  type="textarea"
                  :rows="5"
                  placeholder="请输入..."
                  class="t9"
                ></Input>
                <!--<div class="t10"></div>-->
                <Button class="t10" @click="navigator('administration5')">
                  前往已申报工作量管理页面
                </Button>
                <!--<div class="t11"></div>-->
                <Button class="t11" @click="navigator('administration')">
                  返回首页
                </Button>
                <!--<div class="t12"></div>-->
                <Button
                  type="error"
                  class="t12"
                  @click="navigator('administration4')"
                >
                  确定修改
                </Button>
                <!--<div class="t13"></div>-->
                <!--<Button type="error" class="t13">审批否决</Button>-->
              </Card>
            </Col>
          </Row>
        </div>
        <!--                <div class="layout-copy">
                                    2011-2016 &copy; TalkingData
                                </div>-->
      </i-col>
    </Row>

    <!--        <div class="layout-header">
                    <div class="layout-logo"></div>
                </div>-->
    <!--        <div style="height: 200px"></div>-->
    <!--        <div class="layout-copy">
                    2011-2016 &copy; TalkingData
                </div>-->
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'student',
  data() {
    return {
      spanLeft: 5,
      spanRight: 19,
      value6: '',
      Name: '',
      ID: '',
      AcName: '',
      AcTime: '',
      Workload: ''
    };
  },
  computed: {
    iconSize() {
      return this.spanLeft === 5 ? 14 : 24;
    }
  },
  mounted() {
    let config = { headers: { 'X-Requested-With': 'XMLHttpRequest' } };
    axios.get('../PHP/Admin/Salary_Fix_board.php').then(function (response) {
      response.data = JSON.parse(response.data);
      this.data().Name = response.data.Name;
      this.data().ID = response.data.ID;
      this.data().AcName = response.data.AcName;
      this.data().AcTime = response.data.AcTime;
      this.data().Workload = response.data.Workload;
    });
  },
  methods: {
    navigator(e) {
      // console.log(e);
      if (e == 'administration4') {
        let params =
          'ajax=' +
          encodeURIComponent(
            JSON.stringify({
              Salary: this.data().value6
            })
          );
        let config = { headers: { 'X-Requested-With': 'XMLHttpRequest' } };
        axios.post('../PHP/Admin/Salary_Fix.php', params, config);
      }
      this.$router.push({ name: e });
    }
    /*                        go: function () {
                                        this.$router.push('/homepage')
                                    },*/
    /*                       toggleClick () {
                                       if (this.spanLeft === 5) {
                                           this.spanLeft = 2;
                                           this.spanRight = 22;
                                       } else {
                                           this.spanLeft = 5;
                                           this.spanRight = 19;
                                       }
                                   }*/
  }
};
</script>
