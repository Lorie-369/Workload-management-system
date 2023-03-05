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
  height: 300px;
  width: 500px;
  border-radius: 12px;
}
.s2content1 {
  position: absolute;
  /*background-color: #8ce6b0;*/
  left: 20px;
  top: 20px;
  width: 455px;
  height: 100px;
}
.s2content11 {
  position: absolute;
  /* background-color: #2baee9;*/
  left: 10px;
  top: 20px;
  width: 100px;
  height: 20px;
}
.s2content111 {
  position: absolute;
  /*background-color: #adc6ff;*/
  left: 10px;
  top: 50px;
  width: 430px;
  height: 40px;
}
.s2content2 {
  position: absolute;
  /*background-color: #2baee9;*/
  left: 20px;
  top: 130px;
  width: 200px;
  height: 100px;
}
.s2content22 {
  position: absolute;
  /*background-color: #8ce6b0;*/
  left: 10px;
  top: 20px;
  width: 100px;
  height: 20px;
}
.s2content222 {
  position: absolute;
  /*background-color: #e6ebf1;*/
  left: 10px;
  top: 50px;
  width: 180px;
  height: 40px;
}
.s2content3 {
  position: absolute;
  /* background-color: #8391a5;*/
  left: 265px;
  top: 130px;
  width: 210px;
  height: 100px;
}
.s2content33 {
  position: absolute;
  /*background-color: #adc6ff;*/
  left: 10px;
  top: 20px;
  width: 100px;
  height: 20px;
}
.s2content333 {
  position: absolute;
  /*background-color: #8ce6b0;*/
  left: 10px;
  top: 50px;
  width: 185px;
  height: 40px;
}
.s2content4 {
  position: absolute;
  /*background-color: #adc6ff;*/
  left: 275px;
  top: 255px;
  width: 90px;
  height: 30px;
}
.s2content5 {
  position: absolute;
  /*background-color: #91d5ff;*/
  left: 375px;
  top: 255px;
  width: 90px;
  height: 30px;
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
        <p style="color: white">学生端</p>
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
          <Menu-item name="student">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">首页</span>
          </Menu-item>
          <Menu-item name="2">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">当月工作量申报</span>
          </Menu-item>
          <Menu-item name="student4">
            <Icon type="ios-xxx" :size="iconSize"></Icon>
            <span class="layout-text">管理已有工作量</span>
          </Menu-item>
          <Menu-item name="student5">
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
                <div class="s2content1">
                  <div class="s2content11">
                    <p style="color: black">活动名称</p>
                  </div>
                  <div class="s2content111">
                    <Input
                      v-model="value1"
                      placeholder="请输入..."
                      style="width: 430px"
                    ></Input>
                  </div>
                </div>
                <div class="s2content2">
                  <div class="s2content22">
                    <p style="color: black">活动时间</p>
                  </div>
                  <div class="s2content222">
                    <Input
                      v-model="value2"
                      placeholder="请输入..."
                      style="width: 180px"
                    ></Input>
                  </div>
                </div>
                <div class="s2content3">
                  <div class="s2content33">
                    <p style="color: black">工作量</p>
                  </div>
                  <div class="s2content333">
                    <Input
                      v-model="value3"
                      placeholder="请输入..."
                      style="width: 185px"
                    ></Input>
                  </div>
                </div>
                <!--<div class="s2content4"></div>-->
                <Button class="s2content4">返回</Button>
                <!--<div class="s2content5"></div>-->
                <Button
                  type="error"
                  class="s2content5"
                  @click="navigator('student3')"
                >
                  确认
                </Button>
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
  name: 'student2',
  data() {
    return {
      spanLeft: 5,
      spanRight: 19,
      value1: '',
      value2: '',
      value3: ''
    };
  },
  computed: {
    iconSize() {
      return this.spanLeft === 5 ? 14 : 24;
    }
  },
  created: {
    function() {
      alert('student2');
    }
  },
  methods: {
    navigator(e) {
      // console.log(e);
      if (e == 'student3') {
        let params =
          'ajax=' +
          encodeURIComponent(
            JSON.stringify({
              AcName: this.value1,
              AcTime: this.value2,
              Workload: this.value3
            })
          );
        let config = { headers: { 'X-Requested-With': 'XMLHttpRequest' } };
        axios
          .post('../PHP/Admin/Salary_Fix.php', params, config)
          .then(function (response) {
            this.$router.push({ name: e });
          })
          .catch(function (error) {
            alert('工作量已存在');
            console.log(error);
          });
      } else {
        this.$router.push({ name: e });
      }
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
    /*            getParams(){
                const routerParams = this.$route.query.id;
                console.log(routerParams);
                if (routerParams!=null){
                    // this.addData()
                    this.modal=true;
                    this.detail.inspector=routerParams;
                }
            },*/
  }
  /*        created: function() {
            window.that = this
            this.getParams()
        },*/
};
</script>
