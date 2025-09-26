<?php

?>


/*=============================================================================================================================*/


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HELP ISKO - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root{
      --page-bg:#e9ece8;
      --panel-bg:#cfe6d1;
      --panel-border:#a8c7ac;
      --accent:#2f6f3a;
      --accent-contrast:#ffffff;
      --muted:#8aa78f;
    }
    body{ background:var(--page-bg); }
    .auth-card{
      background:var(--panel-bg);
      border:1px solid var(--panel-border);
      border-radius:14px;
      box-shadow:0 2px 8px rgba(0,0,0,.06);
    }
    .left-box{
      background:rgba(0,0,0,.06);
      border-radius:14px;
      min-height:220px;
    }
    .label-row{
      font-weight:600;
      color:#1b1b1b;
    }
    .btn-signin{
      background:var(--accent);
      color:var(--accent-contrast);
    }
    .btn-signin:hover{ filter:brightness(.95); }
    .helper a{ text-decoration:none; }
  </style>
</head>
<body>
  <header class="py-3 text-center">
    <h5 class="m-0 fw-bold">HELP ISKO</h5>
  </header>

  <main class="container">
    <section class="auth-card p-3 p-md-4">
      <div class="row g-3 g-md-4 align-items-stretch">
        <aside class="col-12 col-md-4">
          <div class="left-box h-100 p-3 d-flex flex-column">
            <div class="mb-2 fw-semibold">Details:</div>
            <div class="text-muted small">Add any helpful details here.</div>
          </div>
        </aside>

        <div class="col-12 col-md-8">
          <form class="h-100 d-flex flex-column">
            <!-- Username -->
            <div class="mb-2 d-flex align-items-center gap-2 label-row">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z"/></svg>
              <span>Login :</span>
            </div>
            <div class="mb-3">
              <label class="visually-hidden" for="username">Username</label>
              <input id="username" type="text" class="form-control" placeholder="Enter Username" />
            </div>

            <!-- Password -->
            <div class="mb-2 d-flex align-items-center gap-2 label-row">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17 8V7a5 5 0 0 0-10 0v1H5v14h14V8Zm-8 0V7a3 3 0 0 1 6 0v1Zm1.5 7.5a1.5 1.5 0 1 1 3 0V18h-3Z"/></svg>
              <span>Password :</span>
            </div>
            <div class="mb-3">
              <label class="visually-hidden" for="password">Password</label>
              <input id="password" type="password" class="form-control" placeholder="Enter Password" />
            </div>

            <p class="helper text-muted small mb-3">
              Dont have account? Go to  CSDL to register.
            </p>

            <button type="submit" class="btn btn-signin w-100 py-2 fw-semibold">Sign in</button>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
