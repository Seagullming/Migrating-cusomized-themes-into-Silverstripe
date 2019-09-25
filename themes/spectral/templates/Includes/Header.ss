	<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
                                        <% loop Menu(1) %>
                                            <% if $MenuTitle != "About Us" %>                                           
											<li><a href="$Link">$MenuTitle</a></li>
                                            <% end_if %>
                                            <% end_loop %>									
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>