<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<div class="card-body">
										 	
<form  method="POST" action="mailinghakeka.php" >
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">To</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="to">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">Subject</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="sujet">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row ">
														<label class="col-sm-3">Message</label>
														<div class="col-sm-9">
															<textarea rows="10" class="form-control" name="texte"></textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row ">
														<label class="col-sm-3">Attach</label>
														<div class="col-sm-9">
															<div class="custom-file">
																<input type="file" class="custom-file-input" name="">
																<label class="custom-file-label">Choose file</label>
															</div>
														</div>
													</div>

												</div>
												<div class="btn-list text-right">
													<button type="button" class="btn btn-danger btn-space m-t-5">Cancel</button>
													<button type="submit" class="btn btn-primary btn-space m-t-5" name="submit">Submit</button>
												</div>
											</form>

               </div>
               
								

	
</form>
</body>
</html>