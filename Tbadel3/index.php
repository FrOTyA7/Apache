<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="/css/application-rtl.min.css" rel="stylesheet">
</head>
   <body style = "font-family: sukar;">
<title>Anonymous</title>
   <center>
   <br>
  <h5> ==> Tbadel 3 Project coded by Khalid <== </h5>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST" class = "" >

      <label for="inputEmail3" class="col-sm-2 col-form-label">Elements</label>

<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Type between elements a space like :A B C" name = "el0" style = "width: 70%;">


Boxs	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;<br>
  <select name="boxs" class="btn btn-secondary" style = "background-color: #ffffff;border-color: #5bc0de;">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
</select>
<Button class="btn btn-outline-info" style = "">
                Submit <input class="" type = "submit" style="display: none; " />
</Button>
         
      </form>
<span style = "font-size: 1.5rem;">
<?php


#

function boxs1(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    echo ( "$number[$n1]"."<br>" );
	}
}

function boxs2(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
      echo ("$number[$n1]"."$number[$n2]"."<br>");
    }
  }
}

function boxs3(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
        echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."<br>");
      }
    }
  }
}

function boxs4(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
          echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."<br>");
        }
      }
    }
  }
}

function boxs5(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
       foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
            echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."<br>");
          }
        }
      }
    }
  }
}

function boxs6(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
              echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."<br>");
            }
          }
        }
      }
    }
  }
  
}

function boxs7(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
                echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."<br>");
              }
            }
          }
        }
      }
    }
  }
}

function boxs8(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
                  echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."<br>");
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs9(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
                    echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."<br>");
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs10(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
                      echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."<br>");
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs11(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
                        echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."<br>");
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs12(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
                          echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."<br>");
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs13(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
                            echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."<br>");
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs14(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
                              echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."<br>");
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs15(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
                                echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."$number[$n15]"."<br>");
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs16(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
		                            foreach ( range(0, (count($number)-1) ) as $n16 ) {
			 echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."$number[$n15]"."$number[$n16]"."<br>");
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs17(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
		                            foreach ( range(0, (count($number)-1) ) as $n16 ) {
		                              foreach ( range(0, (count($number)-1) ) as $n17 ) {
                                    echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."$number[$n15]"."$number[$n16]"."$number[$n17]"."<br>");
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs18(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
		                            foreach ( range(0, (count($number)-1) ) as $n16 ) {
		                              foreach ( range(0, (count($number)-1) ) as $n17 ) {
		                                foreach ( range(0, (count($number)-1) ) as $n18 ) {
                                      echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."$number[$n15]"."$number[$n16]"."$number[$n17]"."$number[$n18]"."<br>");
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs19(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
		                            foreach ( range(0, (count($number)-1) ) as $n16 ) {
		                              foreach ( range(0, (count($number)-1) ) as $n17 ) {
		                                foreach ( range(0, (count($number)-1) ) as $n18 ) {
		                                  foreach ( range(0, (count($number)-1) ) as $n19 ) {
                                        echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n15]"."$number[$n16]"."$number[$n17]"."$number[$n18]"."$number[$n19]"."$number[$n20]"."<br>");
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function boxs20(){
	GLOBAL $number;
	GLOBAL $boxs;
	echo ('Number of possibilities is ' . (count($number))**intval($boxs) . "<br>");
	foreach ( range(0, (count($number)-1) ) as $n1 ) {
    foreach ( range(0, (count($number)-1) ) as $n2 ) {
		  foreach ( range(0, (count($number)-1) ) as $n3 ) {
		    foreach ( range(0, (count($number)-1) ) as $n4 ) {
		      foreach ( range(0, (count($number)-1) ) as $n5 ) {
		        foreach ( range(0, (count($number)-1) ) as $n6 ) {
		          foreach ( range(0, (count($number)-1) ) as $n7 ) {
		            foreach ( range(0, (count($number)-1) ) as $n8 ) {
		              foreach ( range(0, (count($number)-1) ) as $n9 ) {
		                foreach ( range(0, (count($number)-1) ) as $n10 ) {
		                  foreach ( range(0, (count($number)-1) ) as $n11 ) {
		                    foreach ( range(0, (count($number)-1) ) as $n12 ) {
		                      foreach ( range(0, (count($number)-1) ) as $n13 ) {
		                        foreach ( range(0, (count($number)-1) ) as $n14 ) {
		                          foreach ( range(0, (count($number)-1) ) as $n15 ) {
		                            foreach ( range(0, (count($number)-1) ) as $n16 ) {
		                              foreach ( range(0, (count($number)-1) ) as $n17 ) {
		                                foreach ( range(0, (count($number)-1) ) as $n18 ) {
		                                  foreach ( range(0, (count($number)-1) ) as $n19 ) {
		                                    foreach ( range(0, (count($number)-1) ) as $n20 ) {
                                          echo ("$number[$n1]"."$number[$n2]"."$number[$n3]"."$number[$n4]"."$number[$n5]"."$number[$n6]"."$number[$n7]"."$number[$n8]"."$number[$n9]"."$number[$n10]"."$number[$n11]"."$number[$n12]"."$number[$n13]"."$number[$n14]"."$number[$n15]"."$number[$n16]"."$number[$n17]"."$number[$n18]"."$number[$n19]"."$number[$n20]"."<br>");
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}


#




/*
if (isset($_POST["el0"]) and isset($_POST["boxs"]) )
{
$el0 = $_POST["el0"];
$number = explode(' ', $el0);

$number = array_unique($number);
$number = array_values($number);
print_r ($number);
}
*/

if( isset($_POST["el0"]) or isset($_POST["boxs"])  ) {
	
$el0 = $_POST["el0"];
$boxs = $_POST["boxs"];

$number = explode(' ', $el0);     // Extend
$number = array_unique($number);  // Remove duplicates 
$number = array_values($number);  // re-index

#

if ( $boxs == 1 ){ 
	boxs1();
}elseif ( $boxs == 2 ) {
	boxs2();
}elseif ( $boxs == 3 ) {
	boxs3();
}elseif ( $boxs == 4 ) {
	boxs4();
}elseif ( $boxs == 5 ) {
	boxs5();
}elseif ( $boxs == 6 ) {
	boxs6();
}elseif ( $boxs == 7 ) {
	boxs7();
}elseif ( $boxs == 8 ) {
	boxs8();
}elseif ( $boxs == 9 ) {
	boxs9();
}elseif ( $boxs == 10 ) {
	boxs10();
}elseif ( $boxs == 11 ) {
	boxs11();
}elseif ( $boxs == 12 ) {
	boxs12();
}elseif ( $boxs == 13 ) {
	boxs13();
}elseif ( $boxs == 14 ) {
	boxs14();
}elseif ( $boxs == 15 ) {
	boxs15();
}elseif ( $boxs == 16 ) {
	boxs16();
}elseif ( $boxs == 17 ) {
	boxs17();
}elseif ( $boxs == 18 ) {
	boxs18();
}elseif ( $boxs == 19 ) {
	boxs19();
}elseif ( $boxs == 20 ) {
	boxs20();
}

#
}

?>
</span>
<br>

        <p style="color: #bbbbbb; display:inline;">Copyright ©</p>
		<a style="color: #79aad4;" href="/">Anonymous</a>
		<p style="color: #bbbbbb; display:inline;">. All rights reserved.</p>
		
   </center>
   </body>
</html>