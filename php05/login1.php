<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style_03.css" />
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<title>ユーザー登録</title>
</head>
<body>

<header>
</header>

<div class="jumbotron">
 <div class="inside">
  <div class="kesu_line">
    <button type="button" class="kesu" aria-busy="false" style="padding: 0px; margin: 0px;">
        <svg viewBox="0 0 24 24" role="img" aria-label="閉じる" focusable="false" style="height: 16px; width: 16px; display: block; fill: rgb(118, 118, 118);">
          <path d="m23.25 24c-.19 0-.38-.07-.53-.22l-10.72-10.72-10.72 10.72c-.29.29-.77.29-1.06 0s-.29-.77 0-1.06l10.72-10.72-10.72-10.72c-.29-.29-.29-.77 0-1.06s.77-.29 1.06 0l10.72 10.72 10.72-10.72c.29-.29.77-.29 1.06 0s .29.77 0 1.06l-10.72 10.72 10.72 10.72c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22" fill-rule="evenodd">
          </path>
        </svg>
    </button>
  </div>
    <form name="form1" action="login_act1.php" method="post">
      <!-- <div class="box-content">
          <div class="cl_info">
            <div class="item">アカウントID<input type="text" name="lid" id="write"></div><br>
            <div class="item">パスワード<input type="password" name="lpw" id="write"></div><br>
          </div>
      </div> -->
      <section>
        <section>
          <div style="margin-bottom: 24px;">
            <div class="_492uxj4">
              <h2 tabindex="-1" class="title_login">ログイン
              </h2>
            </div>
          </div>
          <div>
            <form action="/oauth_connect?from=facebook_login&amp;service=facebook" method="POST">
              <input type="hidden" name="authenticity_token" value="V4$.airbnb.jp$gafYWV29i7U$iMl8wcfInJGRyUoyjje2-WWYoCX7uGgWUmwb0T64l2I=">
                <button type="submit" class="fb_btn" aria-busy="false">
                  <span class="_1vcs9n54">
                    <div class="fb_logo" style="margin: 0px auto;">
                      <div class="fb_text">
                        <div style="margin-right: 12px;">
                          <svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: currentcolor;">
                            <path d="m8 14.41v-4.17c0-.42.35-.81.77-.81h2.52v-2.08c0-4.84 2.48-7.31 7.42-7.35 1.65 0 3.22.21 4.69.64.46.14.63.42.6.88l-.56 4.06c-.04.18-.14.35-.32.53-.21.11-.42.18-.63.14-.88-.25-1.78-.35-2.8-.35-1.4 0-1.61.28-1.61 1.73v1.8h4.52c.42 0 .81.42.81.88l-.35 4.17c0 .42-.35.71-.77.71h-4.21v16c0 .42-.35.81-.77.81h-5.21c-.42 0-.8-.39-.8-.81v-16h-2.52a.78.78 0 0 1 -.78-.78" fill-rule="evenodd">
                            </path>
                          </svg>
                        </div>
                      </div>
                      <div class="fb_text">Facebookでログイン
                      </div>
                    </div>
                  </span>
                </button>
              </form>
          </div>
          <div style="margin-top: 16px; margin-bottom: 16px;">
            <div class="center"><span class="or_title">
              <span class="or">または
                </span>
              </span>
            </div>
          </div>
          <div style="margin-bottom: 24px;">
            <div class="_2h22gn">
              <div class="others">
                <div style="margin-bottom: 8px;">
                  <button type="button" class="mail" aria-busy="false">
                    <span class="_1vcs9n54">
                      <div class="_qtix31" style="margin: 0px auto;">
                        <div class="mail_text"><div style="margin-right: 12px;">
                          <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: currentcolor;">
                            <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd">
                            </path>
                          </svg>
                        </div>
                      </div>
                        <div class="mail_text">メールアドレス
                        </div>
                      </div>
                    </span>
                  </button>
                </div>
              </div>
              <div class="google_btn">
                <div style="margin-bottom: 8px;">
                  <form action="/oauth_connect?from=google_login&amp;service=google" method="POST">
                    <input type="hidden" name="authenticity_token" value="V4$.airbnb.jp$gafYWV29i7U$iMl8wcfInJGRyUoyjje2-WWYoCX7uGgWUmwb0T64l2I=">
                      <button type="submit" class="google" aria-busy="false">
                        <span class="_1vcs9n54">
                          <div class="_qtix31" style="margin: 0px auto;">
                            <div class="_ni9axhe"><div style="margin-right: 12px;">
                              <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block;">
                                <g fill="none" fill-rule="evenodd">
                                  <path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335">
                                  </path>
                                  <path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4">
                                  </path>
                                  <path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05">
                                  </path>
                                  <path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853">
                                  </path>
                                  <path d="M0 0h18v18H0V0z">
                                  </path>
                                </g>
                              </svg>
                            </div>
                          </div>
                          <div class="_ni9axhe">Google</div>
                          </div>
                        </span>
                      </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div style="margin-top: 16px; margin-bottom: 16px;">
            <div class="_1698ein"></div>
          </div>
          <div class="va-container va-container-h">
          <span class="va-middle text-center">
          <span class="_fgdupie">アカウントをお持ちではないですか?</span>
          <div class="_36rlri" style="margin-left: 8px; margin-right: 8px;">
            <span class="_12i0h32r">
              <a href="/signup_login?" class="_vb3kqf0" aria-busy="false">登録</a>
            </span>
          </div>
          <div style="margin-top: 24px;">
            <div class="_1kqfdvk7">
              <button type="button" class="_1k01n3v1" aria-busy="false">
                <div class="_qtix31">
                  <div class="_ni9axhe">
                    <div style="margin-right: 8px;">
                      <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                        <path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd">
                        </path>
                      </svg>
                    </div>
                  </div>
                <div class="_ni9axhe">戻る</div>
                </div>
              </button>
            </div>
          </div>
          </span>
          </div>
        </section>
      </section>
      <!-- <input type="submit" value="ログイン" id="btn1"> -->
    </form>
  </div>
</div>



<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<!-- <form method="post" action="record_insert.php">
ユーザー名:<input type="text" name="name" />
アカウント:<input type="text" name="lid" />
ID:<input type="password" name="lpw" />
<input type="submit" value="登録" />
</form> -->


</body>
</html>