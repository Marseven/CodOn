@extends('Layout.Front-compte')

@section('content')
  <!-- Start top-section Area -->
  <section class="top-section-area pb-50 pt-50">
      <div class="container">
          <div class="row justify-content-between align-items-center d-flex">
              <div class="col-lg-8 top-left">
                  <h1 class="text-uppercase text-white mb-20">Mon Compte</h1>
                  <p class="text-white">
                      Trouvez des réponse à toutes les questions que vous vous posez sur le développement informatique ici.
                  </p>
              </div>
              <div class="col-lg-4 top-right">
                  <ul>
                      <li><a href="{{ route('accueil') }}">Accueil</a><span class="lnr lnr-arrow-right"></span></li>
                      <li>Mon Compte</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!-- End top-section Area -->

  <!-- contenu -->
  <!-- Main Content -->
<div class="container-fluid pt-25" style="padding: 5%;">
  <!-- Row -->
  <div class="row">
    <div class="col-lg-3 col-xs-12">
      <div class="panel panel-default card-view  pa-0">
        <div class="panel-wrapper collapse in">
          <div class="panel-body  pa-0">
            <div class="profile-box">
              <div class="profile-cover-pic">
                <div class="fileupload btn btn-default">
                  <span class="btn-text">Modifier</span>
                  <input class="upload" type="file">
                </div>
                <div class="profile-image-overlay"></div>
              </div>
              <div class="profile-info text-center">
                <div class="profile-img-wrap">
                  <img class="inline-block mb-10" src="../img/mock1.jpg" alt="user"/>
                  <div class="fileupload btn btn-default">
                    <span class="btn-text">Modifier</span>
                    <input class="upload" type="file">
                  </div>
                </div>
                <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">Mebodo Richard</h5>
                <h6 class="block capitalize-font pb-20">Développeur Web</h6>
              </div>
              <div class="social-info">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <span class="counts block head-font"><span class="counter-anim">345</span></span>
                    <span class="counts-text block">Articles</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <span class="counts block head-font"><span class="counter-anim">246</span></span>
                    <span class="counts-text block">Sujets de Forum</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <span class="counts block head-font"><span class="counter-anim">898</span></span>
                    <span class="counts-text block">Projets</span>
                  </div>
                </div>
                <button class="btn btn-default btn-block btn-outline btn-anim mt-30" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i><span class="btn-text"> Modifier le Profil</span></button>
                <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-right" id="myModalLabel">Modification du Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <div class="modal-body">
                        <!-- Row -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="">
                              <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                  <div class="col-sm-12 col-xs-12">
                                    <div class="form-wrap">
                                      <form action="#">
                                        <div class="form-body overflow-hide">
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputuname_1">Name</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="icon-user"></i></div>
                                              <input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                              <input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="icon-phone"></i></div>
                                              <input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
                                            <div class="input-group">
                                              <div class="input-group-addon"><i class="icon-lock"></i></div>
                                              <input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">Gender</label>
                                            <div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_1" value="option1" checked="">
                                                <label for="radio_1">
                                                M
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <input type="radio" name="radio1" id="radio_2" value="option2">
                                                <label for="radio_2">
                                                F
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label mb-10">Country</label>
                                            <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                              <option value="Category 1">USA</option>
                                              <option value="Category 2">Austrailia</option>
                                              <option value="Category 3">India</option>
                                              <option value="Category 4">UK</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-actions mt-10">
                                          <button type="submit" class="btn btn-success mr-10 mb-30">Mettre à Jour</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Enregistrer</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-xs-12">
      <div class="panel panel-default card-view pa-0">
        <div class="panel-wrapper collapse in">
          <div  class="panel-body pb-0">
            <div  class="tab-struct custom-tab-1">
              <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                <li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Profil</span></a></li>
                <li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Forum<span class="inline-block">(246)</span></span></a></li>
                <li role="presentation" class=""><a  data-toggle="tab" id="earning_tab_8" role="tab" href="#earnings_8" aria-expanded="false"><span>Articles</span></a></li>
                <li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>Paramètre</span></a></li>
              </ul>
              <div class="tab-content" id="myTabContent_8">
                <div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
                  <div class="col-md-12">
                    <div class="pt-20">
                      <div class="streamline user-activity">
                        <div class="sl-item">
                          <a href="javascript:void(0)">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                              <img class="img-responsive img-circle" src="../img/user.png" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                              <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span></p>
                              <span class="block txt-grey font-12 capitalize-font">3 Min</span>
                            </div>
                          </a>
                        </div>

                        <div class="sl-item">
                          <a href="javascript:void(0)">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                              <img class="img-responsive img-circle" src="../img/user1.png" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                              <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span></p>
                              <div class="activity-thumbnail">
                                <img src="../img/thumb-1.jpg" alt="thumbnail"/>
                                <img src="../img/thumb-2.jpg" alt="thumbnail"/>
                                <img src="../img/thumb-3.jpg" alt="thumbnail"/>
                              </div>
                              <span class="block txt-grey font-12 capitalize-font">8 Min</span>
                            </div>
                          </a>
                        </div>

                        <div class="sl-item">
                          <a href="javascript:void(0)">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                              <img class="img-responsive img-circle" src="../img/user2.png" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                              <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">madalyn rascon</span><span>assigned a new task</span></p>
                              <span class="block txt-grey font-12 capitalize-font">28 Min</span>
                            </div>
                          </a>
                        </div>

                        <div class="sl-item">
                          <a href="javascript:void(0)">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                              <img class="img-responsive img-circle" src="../img/user3.png" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                              <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Ezequiel Merideth</span><span>completed project wireframes</span></p>
                              <span class="block txt-grey font-12 capitalize-font">yesterday</span>
                            </div>
                          </a>
                        </div>

                        <div class="sl-item">
                          <a href="javascript:void(0)">
                            <div class="sl-avatar avatar avatar-sm avatar-circle">
                              <img class="img-responsive img-circle" src="../img/user4.png" alt="avatar"/>
                            </div>
                            <div class="sl-content">
                              <p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span></p>
                              <span class="block txt-grey font-12 capitalize-font">18 feb</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div  id="follo_8" class="tab-pane fade" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="followers-wrap">
                        <ul class="followers-list-wrap">
                          <li class="follow-list">
                            <div class="follo-body">
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Clay Masse</span>
                                  <span class="time block truncate txt-grey">No one saves us but ourselves.</span>
                                </div>
                                <button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
                                <div class="clearfix"></div>
                              </div>
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Evie Ono</span>
                                  <span class="time block truncate txt-grey">Unity is strength</span>
                                </div>
                                <button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
                                <div class="clearfix"></div>
                              </div>
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Madalyn Rascon</span>
                                  <span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
                                </div>
                                <button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
                                <div class="clearfix"></div>
                              </div>
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Mitsuko Heid</span>
                                  <span class="time block truncate txt-grey">I’m thankful.</span>
                                </div>
                                <button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
                                <div class="clearfix"></div>
                              </div>
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Ezequiel Merideth</span>
                                  <span class="time block truncate txt-grey">Patience is bitter.</span>
                                </div>
                                <button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
                                <div class="clearfix"></div>
                              </div>
                              <div class="follo-data">
                                <img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
                                <div class="user-data">
                                  <span class="name block capitalize-font">Jonnie Metoyer</span>
                                  <span class="time block truncate txt-grey">Genius is eternal patience.</span>
                                </div>
                                <button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div  id="earnings_8" class="tab-pane fade" role="tabpanel">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="example-advanced-form" action="#">
                        <div class="table-wrap">
                          <div class="table-responsive">
                            <table class="table table-striped display product-overview" id="datable_1">
                              <thead>
                                <tr>
                                  <th>Date</th>
                                  <th>Item Sales Colunt</th>
                                  <th>Earnings</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th colspan="2">total:</th>
                                  <th></th>
                                </tr>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <td>monday, 12</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$400</td>
                                </tr>
                                <tr>
                                  <td>tuesday, 13</td>
                                  <td>
                                   2
                                  </td>
                                  <td>$400</td>
                                </tr>
                                <tr>
                                  <td>wednesday, 14</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$420</td>
                                </tr>
                                <tr>
                                  <td>thursday, 15</td>
                                  <td>
                                   5
                                  </td>
                                  <td>$500</td>
                                </tr>
                                <tr>
                                  <td>friday, 15</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$400</td>
                                </tr>
                                <tr>
                                  <td>saturday, 16</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$400</td>
                                </tr>
                                <tr>
                                  <td>sunday, 17</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$400</td>
                                </tr>
                                <tr>
                                  <td>monday, 18</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$500</td>
                                </tr>
                                <tr>
                                  <td>tuesday, 19</td>
                                  <td>
                                   3
                                  </td>
                                  <td>$400</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div  id="settings_8" class="tab-pane fade" role="tabpanel">
                  <!-- Row -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="">
                        <div class="panel-wrapper collapse in">
                          <div class="panel-body pa-0">
                            <div class="col-sm-12 col-xs-12">
                              <div class="form-wrap">
                                <form action="#">
                                  <div class="form-body overflow-hide">
                                    <div class="form-group">
                                      <label class="control-label mb-10" for="exampleInputuname_01">Name</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                        <input type="text" class="form-control" id="exampleInputuname_01" placeholder="willard bryant">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label mb-10" for="exampleInputEmail_01">Email address</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                        <input type="email" class="form-control" id="exampleInputEmail_01" placeholder="xyz@gmail.com">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-phone"></i></div>
                                        <input type="email" class="form-control" id="exampleInputContact_01" placeholder="+102 9388333">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label mb-10" for="exampleInputpwd_01">Password</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="icon-lock"></i></div>
                                        <input type="password" class="form-control" id="exampleInputpwd_01" placeholder="Enter pwd" value="password">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label mb-10">Gender</label>
                                      <div>
                                        <div class="radio">
                                          <input type="radio" name="radio1" id="radio_01" value="option1" checked="">
                                          <label for="radio_01">
                                          M
                                          </label>
                                        </div>
                                        <div class="radio">
                                          <input type="radio" name="radio1" id="radio_02" value="option2">
                                          <label for="radio_02">
                                          F
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label mb-10">Country</label>
                                      <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">USA</option>
                                        <option value="Category 2">Austrailia</option>
                                        <option value="Category 3">India</option>
                                        <option value="Category 4">UK</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-actions mt-10">
                                    <button type="submit" class="btn btn-success mr-10 mb-30">Mettre à Jour</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- /Row -->

  <!-- Row -->
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="panel panel-default border-panel card-view">
            <div class="panel-heading">
              <div class="pull-left">
                <h6 class="panel-title pull-left">Collaborateurs</h6>
              </div>
              <div class="pull-right">
                <a href="#" class="pull-left inline-block mr-15">
                  <i class="zmdi zmdi-search"></i>
                </a>
                <a class="pull-left inline-block" href="#" data-effect="fadeOut">
                  <i class="zmdi zmdi-plus"></i>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
              <div class="panel-body row pa-0">
                <div class="chat-cmplt-wrap chat-for-widgets">
                  <div class="chat-box-wrap">
                    <div>
                      <div class="users-nicescroll-bar">
                        <ul class="chat-list-wrap">
                          <li class="chat-list">
                            <div class="chat-body">
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Clay Masse</span>
                                    <span class="time block truncate txt-grey">No one saves us but ourselves.</span>
                                  </div>
                                  <div class="status away"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Evie Ono</span>
                                    <span class="time block truncate txt-grey">Unity is strength</span>
                                  </div>
                                  <div class="status offline"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Madalyn Rascon</span>
                                    <span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
                                  </div>
                                  <div class="status online"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Mitsuko Heid</span>
                                    <span class="time block truncate txt-grey">I’m thankful.</span>
                                  </div>
                                  <div class="status online"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Ezequiel Merideth</span>
                                    <span class="time block truncate txt-grey">Patience is bitter.</span>
                                  </div>
                                  <div class="status offline"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user1.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Jonnie Metoyer</span>
                                    <span class="time block truncate txt-grey">Genius is eternal patience.</span>
                                  </div>
                                  <div class="status online"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user2.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Angelic Lauver</span>
                                    <span class="time block truncate txt-grey">Every burden is a blessing.</span>
                                  </div>
                                  <div class="status away"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user3.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Priscila Shy</span>
                                    <span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
                                  </div>
                                  <div class="status online"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                              <a href="javascript:void(0)">
                                <div class="chat-data">
                                  <img class="user-img img-circle"  src="../img/user4.png" alt="user"/>
                                  <div class="user-data">
                                    <span class="name block capitalize-font">Linda Stack</span>
                                    <span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
                                  </div>
                                  <div class="status away"></div>
                                  <div class="clearfix"></div>
                                </div>
                              </a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="recent-chat-box-wrap">
                    <div class="recent-chat-wrap">
                      <div class="panel-heading ma-0 pt-15">
                        <div class="goto-back">
                          <a  id="goto_back_widget" href="javascript:void(0)" class="inline-block txt-grey">
                            <i class="zmdi zmdi-chevron-left"></i>
                          </a>
                          <span class="inline-block txt-dark">ryan</span>
                          <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                          <div class="chat-content">
                            <ul class="users-chat-nicescroll-bar pt-20">
                              <li class="friend">
                                <div class="friend-msg-wrap">
                                  <img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
                                  <div class="msg pull-left">
                                    <p>Hello Jason, how are you, it's been a long time since we last met?</p>
                                    <div class="msg-per-detail text-right">
                                      <span class="msg-time txt-grey">2:30 PM</span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="self mb-10">
                                <div class="self-msg-wrap">
                                  <div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
                                    <div class="msg-per-detail text-right">
                                      <span class="msg-time txt-grey">2:31 pm</span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="self">
                                <div class="self-msg-wrap">
                                  <div class="msg block pull-right">  How about you?
                                    <div class="msg-per-detail text-right">
                                      <span class="msg-time txt-grey">2:31 pm</span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                              <li class="friend">
                                <div class="friend-msg-wrap">
                                  <img class="user-img img-circle block pull-left"  src="../img/user.png" alt="user"/>
                                  <div class="msg pull-left">
                                    <p>Not too bad.</p>
                                    <div class="msg-per-detail  text-right">
                                      <span class="msg-time txt-grey">2:35 pm</span>
                                    </div>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="input-group">
                            <input type="text" id="input_msg_send_widget" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                            <div class="input-group-btn emojis">
                              <div class="dropup">
                                <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="javascript:void(0)">Action</a></li>
                                  <li><a href="javascript:void(0)">Another action</a></li>
                                  <li class="divider"></li>
                                  <li><a href="javascript:void(0)">Separated link</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="input-group-btn attachment">
                              <div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
                                <input type="file" class="upload">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="panel panel-default border-panel card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Projets</h6>
          </div>
          <div class="pull-right">
            <div class="pull-left inline-block dropdown mr-15">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
              <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Clear All</a></li>
                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Select All</a></li>
              </ul>
            </div>
            <a class="pull-left inline-block close-panel" href="#" data-effect="fadeOut">
              <i class="zmdi zmdi-close"></i>
            </a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div class="panel-body row pa-0">
            <div class="todo-box-wrap">
              <!-- Todo-List -->
              <ul class="todo-list todo-box-nicescroll-bar">
                <li class="todo-item">
                  <div class="checkbox checkbox-default">
                    <input type="checkbox" id="checkbox001"/>
                    <label for="checkbox001">Record The First Episode</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
                <li class="todo-item">
                  <div class="checkbox checkbox-pink">
                    <input type="checkbox" id="checkbox002"/>
                    <label for="checkbox002">Prepare The Conference Schedule</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
                <li class="todo-item">
                  <div class="checkbox checkbox-warning">
                    <input type="checkbox" id="checkbox003" checked/>
                    <label for="checkbox003">Decide The Live Discussion Time</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
                <li class="todo-item">
                  <div class="checkbox checkbox-success">
                    <input type="checkbox" id="checkbox004" checked/>
                    <label for="checkbox004">Prepare For The Next Project</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
                <li class="todo-item">
                  <div class="checkbox checkbox-danger">
                    <input type="checkbox" id="checkbox005" checked/>
                    <label for="checkbox005">Finish Up AngularJs Tutorial</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
                <li class="todo-item">
                  <div class="checkbox checkbox-purple">
                    <input type="checkbox" id="checkbox006" checked/>
                    <label for="checkbox006">Finish Infinity Project</label>
                  </div>
                </li>
                <li>
                  <hr class="light-grey-hr"/>
                </li>
              </ul>
              <!-- /Todo-List -->

              <!-- New Todo -->
              <div class="new-todo">
                <div class="input-group">
                  <input type="text" id="add_todo" name="example-input2-group2" class="form-control" placeholder="Créer un nouveau projet">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="zmdi zmdi-plus txt-success"></i></button>
                  </span>
                </div>
              </div>
              <!-- /New Todo -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="panel panel-default card-view bg-twitter">
        <div class="panel-wrapper collapse in">
          <div  class="panel-body">
            <div class="twitter-icon-wrap text-center mb-15">
              <i class="fa fa-twitter"></i>
            </div>
            <!-- START carousel-->
            <div id="twitter_slider" data-ride="carousel" class="carousel slide twitter-slider-wrap text-slider">
              <ol class="carousel-indicators">
                 <li data-target="#twitter_slider" data-slide-to="0" class="active"></li>
                 <li data-target="#twitter_slider" data-slide-to="1"></li>
              </ol>
              <div id="tweets_fetch" role="listbox" class="carousel-inner mb-50">
              </div>
            </div>
            <!-- END carousel-->
          </div>
        </div>
      </div>
        <div class="panel panel-default card-view">
        <div class="panel-heading">
          <div class="pull-left">
            <h6 class="panel-title txt-dark">Mebodo Richard</h6>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
          <div  class="panel-body row pa-0">
            <!--Instagram-->
            <ul class="instagram-lite"></ul>
            <!--/Instagram-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Row -->
</div>
  <!-- /Main Content -->

@endsection
